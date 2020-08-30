
/****** CONTACT ******/

Se você utilizou o git clone do renatonva/Renato, provavelmente o module Contact já estará em app/code.

Instalação do Módulo Contact

Via terminal, use o comando bin/magento module:status

Verifique se em módulos desabilitados, existe Renato_Contact.

Ative o módulo utilizando o comando bin/magento module:enable Renato_Contact.

Limpe o cache utilizando o comando bin/magento cache:clean

Feito isso, basta acessar no rodapé da loja base o link Contact US.

Observação: Criei o módulo em modo desenvolvedor, e desabilitei o envio de e-mail na administração.

Ao submeter o formulario, ele te redireciona para homepage da loja, com a mensagem de sucesso.

No diretorio var/log/ teremos o arquivo contact_hibrido.log

Dentro deverá ter escrito informaçes enviadas no formulario, como nos meus testes ([2020-08-30 15:06:04] myLoggerName.INFO: Hibrido Teste - Formulário de Contato : Name:RenatoDepartament:Comercial E-mail: renatonva@gmail.com Phone: 31 987291400 Message: Estou enviando o formulário para teste. [] []
[2020-08-30 15:10:01] myLoggerName.INFO: Hibrido Teste - Formulário de Contato : Name:Renato Departament:Comercial E-mail: renatonva@gmail.com Phone: 31 89775-5644 Message: Mais um teste de escrita. [] [])

Caso não funcione, tente utilizar bin/magento setup:upgrade e depois bin/magento cache:clean

/******* SOBRE O MÓDULO CONTACT *****/

Algumas observaçes importantes: Eu não fiz nenhuma alteração em vendor/module-contact.
Reutizei a base do módulo para recriar o meu módulo de teste.

Sobre os arquivos: Controller - Reutilizei a base semelhante ao de Contact, criando Controller Post (ações pos submit do formulario).

Em Post, no Construct eu chamo a class logger, que utilizei via monolog/logger (Diferente do módulo IPModule, optei pelo monolog pela facilidade de customizar um arquivo de log).
Para usar o Monolog/Logger, criei uma pasta Logger, e dentro uma class Logger, onde extend da class logger original de monolog.
Também fiz o mesmo procedimento com a class Handler, para auxiliar o tipo de informações de escrita no log, bem como o nome e local de armazenamento do arquivo.

Para alterar o formulario e inserir o dropdown departamento, dentro do meu modulo, criei o template form.phtml
Porem, para utilizar este form no lugar do original,  criei na pasta layout, no meu modulo, o XML contact_index_index.xml (mesma estrutura do form original), e atribuir onde será chamado o novo formulario  <block class="Magento\Contact\Block\ContactForm" name="newContactForm" template="Renato_Contact::form.phtml" />

No arquivo di.xml, inseri informacoes como que Handler irei utilizar e a necessidade de utilizar Filesystem drive para gerar e escreve um novo arquivo.

Por fim, recriei a router.xml, semelhante ao modulo original, porem atribuindo ao meu modulo.
