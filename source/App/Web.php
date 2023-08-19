<?php

namespace Source\App;

use RuntimeException;
use Source\Core\Connect;
use Source\Core\Controller;
use Source\Core\View;
use Source\Models\Category;
use Source\Models\Project;
use Source\Models\User;
use Source\Support\Email;
use stdClass;

/**
 * Web class
 * @package Source\App
 * @author Joab T. Alencar <contato@joabtorres.com.br>
 * @version 1.0
 */
class Web extends Controller
{
    /**
     * __construct function
     */
    public function __construct()
    {
        Connect::getInstance();
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }
    /**
     * SITE HOME
     * home function
     *
     * @return void
     */
    public function home(): void
    {
        $projects = (new Project)->find()->fetch(true);
        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/image/share.jpg")
        );
        echo $this->view->render("home", [
            "head" => $head,
            "projects" => $projects
        ]);
    }
    /**
     * contact function função responsavel para fazer o controller do formulario de contato
     *
     * @param array|null $data
     * @return void
     */
    public function contact(?array $data): void
    {
        if (!empty($data['csrf'])) {
            if (!csrf_verify($data)) {
                $json['message'] = $this->message->error("Error ao enviar, favor use o formulário :/")->render();
                echo json_encode($json);
                return;
            }

            if (in_array("", $data)) {
                $json['message'] = $this->message->info("Por favor, preencha todos os campos corretamente :)")->render();
                echo json_encode($json);
                return;
            }

            $senderEmail = new \stdClass();
            $senderEmail->fullname = $data['fullname'];
            $senderEmail->email = $data['email'];
            $senderEmail->phone = $data['phone'];
            $senderEmail->message = $data['message'];

            if ($this->sendEmail($senderEmail)) {
                $json['message'] = $this->message->success("E-mail enviado com sucesso, obrigado por entrar em contato \o/")->render();
            } else {
                $json['message'] = $this->message->error("Não foi possível enviar o e-mail, serviço temporariamente indisponível :(")->render();
            }
            echo json_encode($json);
            return;
        }
    }
    /**
     * sendEmail function - função responsavel para enviar o e-mail do contato
     *
     * @param stdClass $senderEmail
     * @return boolean
     */
    private function sendEmail(stdClass $senderEmail): bool
    {
        $view = (new View(__DIR__ . "/../../shared/views/email"));
        $message = $view->render("message", [
            "sender" => $senderEmail
        ]);

        $response = (new Email)->bootstrap(
            "Website " . CONF_SITE_NAME . " mensagem de: " . $senderEmail->fullname,
            $message,
            CONF_MAIL_DESTINATARY,
            CONF_SITE_NAME
        )->send();

        return $response;
    }
    /**
     * SITE ERROR
     * error function
     *
     * @param array $data
     * @return void
     */
    public function error(array $data): void
    {
        $error = new \stdClass();

        switch ($data['errcode']) {
            case "problemas":
                $error->code = "OPS";
                $error->title = "Enfrentando problemas!";
                $error->message
                    = "Parece que o serviço não está disponível no momento. Já estou vendo isso, mas caso precise envie um e-mail :)";
                $error->linkTitle = "ENVIAR E-MAIL";
                $error->link = "mailto: " . CONF_MAIL_SUPPORT;
                break;
            case "manutencao":
                $error->code = "OPS";
                $error->title = "Desculpe. Em manutenção!";
                $error->message
                    = "Voltará logo! Por hora estou trabalhando para melhorar o conteúdo para você :P";
                $error->linkTitle = null;
                $error->link = null;
                break;
            default:
                $error->code = $data['errcode'];
                $error->title = "Ooops. Conteúdo Indisponível :/";
                $error->message
                    = "Sinto muito, mas o conteúdo que você tentou acessar não existe, está indisponível no momento ou foi removido :/";
                $error->linkTitle = "Continue navegando";
                $error->link = url_back();
                break;
        }

        $head = $this->seo->render(
            "{$error->code} | {$error->title}",
            $error->message,
            url_back("/ops/{$error->code}"),
            theme("/assets/images/share.jpg"),
            false
        );


        echo $this->view->render("error", [
            "head" => $head,
            "error" => $error
        ]);
    }
}
