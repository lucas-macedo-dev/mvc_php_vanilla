# Estrutura MVC em PHP Vanilla

Descrição
Este projeto apresenta uma estrutura Model-View-Controller (MVC) desenvolvida utilizando PHP Vanilla. A arquitetura MVC é uma abordagem eficaz para organizar e gerenciar o código, separando as preocupações de apresentação, lógica de negócios e manipulação de dados.

Funcionalidades Principais
Model (Modelo): Encarregado da manipulação de dados, representa a camada de acesso ao banco de dados e a lógica de negócios.
View (Visão): Responsável pela apresentação dos dados ao usuário, exibindo as informações de maneira clara e amigável.
Controller (Controlador): Gerencia as interações entre o Modelo e a Visão, processando as requisições do usuário e coordenando as ações necessárias.
Estrutura de Diretórios
A estrutura do projeto é organizada de acordo com os princípios do MVC, facilitando a manutenção e a expansão do código. Aqui estão os principais diretórios:

- app/: Contém os modelos, visões e controladores do aplicativo.
- public/: Armazena os arquivos públicos acessíveis diretamente pelo navegador, como CSS, JavaScript e imagens.
- config/: Contém os arquivos de configuração do aplicativo.
- database/: Inclui scripts e configurações relacionados ao banco de dados.
- vendor/: Diretório de autoloader e dependências do Composer.

> [!NOTE]
> Configuração: Antes de começar, certifique-se de configurar corretamente o arquivo de configuração em config/config.php, ajustando as configurações do banco de dados e outras variáveis  conforme necessário.

> [!IMPORTANT] 
> O funcionamento desse projeto depente da utilização do composer, não se esqueça de instalá-lo e configurá-lo:
```
https://getcomposer.org/doc/00-intro.md
```

Sinta-se à vontade para explorar o código, reportar problemas e propor melhorias!
