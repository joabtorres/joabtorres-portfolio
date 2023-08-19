<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>title</title>
    <style>
        body {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            font-family: Helvetica, sans-serif;
        }

        table {
            padding: 0 10px;
            background: #ffffff;
        }

        .content {
            font-size: 16px;
            margin-bottom: 25px;
            padding-bottom: 5px;
            border-bottom: 1px solid #EEEEEE;
        }

        .content p,
        .content h3 {
            margin: 5px 0;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #888888;
            font-style: italic;
        }

        .footer p {
            margin: 0 0 2px 0;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>
                <div class="content">
                    <?= $this->section("content"); ?>
                    </br>
                    <p>Atenciosamente,
                        <?= CONF_SITE_NAME; ?>.
                    </p>
                </div>
                <div class="footer">
                    <div class="footer">
                        <p>
                            <?= CONF_SITE_NAME; ?> -
                            <?= CONF_SITE_TITLE; ?>
                        </p>
                        <p>
                            <?= CONF_SITE_ADDR_STREET; ?>
                            ,
                            <?= CONF_SITE_ADDR_NUMBER; ?>
                            <?= (CONF_SITE_ADDR_COMPLEMENT ? ", " . CONF_SITE_ADDR_COMPLEMENT : ""); ?>
                        </p>
                        <p>
                            <?= CONF_SITE_ADDR_CITY; ?>/
                            <?= CONF_SITE_ADDR_STATE; ?> -
                            <?= CONF_SITE_ADDR_ZIPCODE; ?>
                        </p>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>