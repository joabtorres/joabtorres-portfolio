    <?php $this->layout("_theme", ["head" => $head]) ?>
    <article id="container-home">
        <div class="container-menu">
            <header class="menu-primary">
                <div class="logo">
                    <a href="<?= url(); ?>"><span class="text-blue-light"> &lt;</span>Joab Torres<span class="text-blue-light">/&gt;</span></a>
                </div>
                <nav>
                    <div class="icon-menu"><i class="fa-solid fa-bars"></i></div>
                    <ul>
                        <li><a href="<?= url("#container-home"); ?>">Inicial</a></li>
                        <li><a href="<?= url("#container-about"); ?>">Sobre</a></li>
                        <li><a href="<?= url("#container-skills"); ?>">Skills</a></li>
                        <li><a href="<?= url("#container-projects"); ?>">Projetos</a></li>
                        <li><a href="<?= url("#container-contacts"); ?>">Contato</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <section class="uianimated delay-200">
            <div class="home-desc">
                <img src="<?= theme("assets/images/banner-develop-project.png") ?>" alt="<?= CONF_SITE_NAME . " | " . CONF_SITE_TITLE; ?>" title="<?= CONF_SITE_NAME . " | " . CONF_SITE_TITLE; ?>" />
                <h3><span id="show-office"></span></h3>
                <h1>Joab Torres Alencar</h1>
                <p>Mestre em Desenvolvimento Rural e Gestão de Empreendimentos Agroalimentares; Especialista em
                    Tecnologias para Aplicações Web; e Tecnólogo em Análise e Desenvolvimento de Sistema.</p>
                <a class="button" href="<?= url("storage/media/joab-torres-alencar-curriculo-vitae.pdf") ?>" target="_blank" title="<?= CONF_SITE_NAME . " - Currículo Vitae" ?>"><i class="fa-solid fa-download"></i> Baixar Currículo</a>
            </div>
            <div class="image-home">
                <img src="<?= theme("assets/images/banner-develop-project.png") ?>" alt="<?= CONF_SITE_NAME . " | " . CONF_SITE_TITLE; ?>" title="<?= CONF_SITE_NAME . " | " . CONF_SITE_TITLE; ?>" />
            </div>
        </section>
    </article>
    <div class="container-img"></div>
    <article id="container-about">
        <section class="uianimated delay-200">
            <h2 class="title-container"><i class="fa-solid fa-laptop-code text-blue-light"></i> SOBRE</h2>
            <article>
                <section class="image-user-about">
                    <img src="<?= theme("assets/images/user-profile.png") ?>" alt="<?= CONF_SITE_NAME . " | " . CONF_SITE_TITLE; ?>" title="<?= CONF_SITE_NAME . " | " . CONF_SITE_TITLE; ?>" />
                </section>
                <section class="desc-about">
                    <p class="text-indent">Olá, sou Joab Torres Alencar, Mestre em Desenvolvimento Rural e Gestão de Empreendimentos Agroalimentares, Especialista em Tecnologias para Aplicações Web e Tecnólogo em Análise e Desenvolvimento de Sistemas. Com uma sólida formação acadêmica e vasta experiência profissional, destaco-me por minha paixão pela Tecnologia da Informação (TI) e minha constante busca por novos desafios no mercado de trabalho.</p>

                    <p class="text-indent"> Atuando tanto na área da docência quanto na área empresarial, concentro meus esforços no setor de desenvolvimento web, onde aplico minhas habilidades em linguagens como HTML, CSS, JavaScript e PHP, e utilizo frameworks renomados como Bootstrap e Laravel. Além disso, possuo expertise em coordenação de equipe técnica, validação de funcionalidades e usabilidades de softwares, manutenção em computadores e infraestrutura de rede.</p>

                    <p class="text-indent">
                        Com um histórico de sucesso em projetos diversos, sou reconhecido por minha capacidade de liderança, meu comprometimento com a excelência e minha habilidade em transmitir conhecimento. Estou sempre em busca de oportunidades que me permitam crescer profissionalmente e contribuir de forma significativa para o avanço da Tecnologia da Informação.
                    </p>
                    <p><a href="<?= url("storage/media/joab-torres-alencar-curriculo-vitae.pdf") ?>" target="_blank" title="<?= CONF_SITE_NAME . " - Currículo Vitae" ?>"><i class="fa-solid fa-download"></i> Baixar Currículo Vitae.</a></p>
                    <p><a href="http://lattes.cnpq.br/0856780614635850" download="true" title="<?= CONF_SITE_NAME . "Currículo Lattes" ?>" target="_blank"><i class="fa-solid fa-download"></i> Baixar Currículo Lattes.</a></p>
                    <ul>
                        <li><a href="https://facebook.com/joabta" target="_blank" title="<?= CONF_SITE_NAME . " | Facebook" ?>"><i class="fa-brands fa-square-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/joabta/" target="_blank" title="<?= CONF_SITE_NAME . " | Linkedin" ?>"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="https://wa.me/559392047173" target="_blank" title="<?= CONF_SITE_NAME . " | Whatsapp" ?>"><i class="fa-brands fa-square-whatsapp"></i></a></li>
                        <li><a href="https://github.com/joabtorres" target="_blank" title="<?= CONF_SITE_NAME . " | Github" ?>"><i class="fa-brands fa-square-github"></i></a></li>
                        <li><a href="https://www.youtube.com/@joabta" target="_blank" title="<?= CONF_SITE_NAME . " | Youtube" ?>"><i class="fa-brands fa-square-youtube"></i></a></li>
                    </ul>
                </section>
            </article>
        </section>
    </article>
    <article id="container-skills">
        <section>
            <h2 class="title-container"><i class="fa-solid fa-laptop-code text-blue-light"></i> SKILLS</h2>
            <div class="list-skills">
                <div class="skill">
                    <p>HTML</p>
                    <img src="<?= theme("assets/images/skills-html.png"); ?>" alt="Skill | HTML" title="Skill | HTML">
                    <div class="skill-bar">
                        <div class="skill-bar-html">
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p>CSS</p>
                    <img src="<?= theme("assets/images/skills-css.png"); ?>" alt="Skill | CSS" title="Skill | CSS">
                    <div class="skill-bar">
                        <div class="skill-bar-css">
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p>JavaScript</p>
                    <img src="<?= theme("assets/images/skills-js.png"); ?>" alt="Skill | JavaScript" title="Skill | JavaScript">
                    <div class="skill-bar">
                        <div class="skill-bar-js">
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p>PHP</p>
                    <img src="<?= theme("assets/images/skills-php.png"); ?>" alt="Skill | PHP" title="Skill | PHP">
                    <div class="skill-bar">
                        <div class="skill-bar-php">
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p>MVC</p>
                    <img src="<?= theme("assets/images/skills-mvc.png"); ?>" alt="Skill | MVC" title="Skill | MVC">
                    <div class="skill-bar">
                        <div class="skill-bar-mvc">
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p>MariaDB/MySQL</p>
                    <img src="<?= theme("assets/images/skills-mysql.png"); ?>" alt="Skill | MariaDB/MySQL" title="Skill | MariaDB/MySQL">
                    <div class="skill-bar">
                        <div class="skill-bar-mysql">
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p>Android</p>
                    <img src="<?= theme("assets/images/skills-android.png"); ?>" alt="Skill | MariaDB/MySQL" title="Skill | MariaDB/MySQL">
                    <div class="skill-bar">
                        <div class="skill-bar-android">
                        </div>
                    </div>
                </div>
                <div class="skill">
                    <p>Kotlin</p>
                    <img src="<?= theme("assets/images/skills-kotlin.png"); ?>" alt="Skill | MariaDB/MySQL" title="Skill | MariaDB/MySQL">
                    <div class="skill-bar">
                        <div class="skill-bar-kotlin">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
    <article id="container-projects">
        <section>
            <h2 class="title-container"><i class="fa-solid fa-laptop-code text-blue-light"></i> PROJETOS</h2>
            <div class="list-projects">
                <?php if (!empty($projects)) : ?>
                    <?php $this->insert("project-list", ["projects" => $projects]); ?>
                <?php endif; ?>
            </div>
        </section>
    </article>
    <article id="container-contacts">
        <section class="uianimated delay-200">
            <h2 class="title-container"><i class="fa-solid fa-laptop-code text-blue-light"></i> Contato</h2>
            <p>Duvidas, críticas ou sugestões? Fique a vontade para entrar em contato comigo, será um prazer atende-lo.
            </p>
            <div class="contact">
                <div class="contact-form">
                    <form action="<?= url("/contato"); ?>" method="post" enctype="multipart/form-data">

                        <?= csrf_input() ?>
                        <div class="group-form">
                            <div class="ajax_response"><?= flash() ?></div>
                        </div>
                        <div class="group-form">
                            <label for="ifullname"><i class="fa-regular fa-user"></i></label>
                            <input type="text" placeholder="Digite seu nome completo" name="fullname" id="ifullname" required minlength="4" />
                        </div>
                        <div class="group-form">
                            <label for="iemail"><i class="fa-regular fa-envelope"></i></label>
                            <input type="email" placeholder="Digite seu e-mail corretamente" name="email" id="iemail" required />
                        </div>
                        <div class="group-form">
                            <label for="iphone"><i class="fa-solid fa-phone"></i></label>
                            <input type="text" placeholder="Digite o número do seu telefone" name="phone" id="iphone" class="phone-format" required />
                        </div>
                        <div class="group-form">
                            <textarea name="message" rows="5" required placeholder="Mensagem..."></textarea>
                        </div>
                        <div class="group-form">
                            <div class="g-recaptcha" data-sitekey="6LcVJlUpAAAAAIO-ItxE6H04Dkw4CjdiTKX7fv4s"></div>
                        </div>
                        <div class="group-form">
                            <button type="submit" name="submit" value="true"> <i class="fa-solid fa-share"></i>
                                Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="contact-list">
                    <ul>
                        <li><i class="fa-solid fa-square-envelope text-blue-light"></i> joabtorres1508@gmail.com</li>
                        <li><i class="fa-solid fa-square-phone text-blue-light"></i> (93) 99204-7173</li>
                        <li><i class="fa-brands fa-square-facebook text-blue-light"></i> facebook.com/joabta</li>
                        <li><i class="fa-brands fa-linkedin text-blue-light"></i> linkedin.com.br/joabta</li>
                    </ul>
                </div>
            </div>
        </section>
    </article>