/****** IP MODULE ******/

Instalação do Módulo IPModule

Descarregue o repositório em app/code.

Será criada a pasta Renato e dentro o módulo IPModule.

Via terminal, use o comando bin/magento module:status

Verifique se em módulos desabilitados, existe Renato_IPModule.

Ative o módulo utilizando o comando bin/magento module:enable Renato_IPModule.

Limpe o cache utilizando o comando bin/magento cache:clean

Em seguida acesse a url: seu_dominio/ipmodule/ipcontroller/meuip no localhost ficará algo parecido com http://localhost/ipmodule/ipcontroller/meuip

Deverá exibir uma página interna do Magento, com o seu número de IP.

Na pasta var/log/debug.log, procure por "Hibrido Teste", deverá existir a mensagem Hibrido Teste IP Usuário IP Usuário : (Número do seu IP)

Caso não funcione, tente utilizar bin/magento setup:upgrade e depois bin/magento cache:clean
