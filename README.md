# Infinity Cars

Projeto escolar demonstrativo de uma loja virtual de veículos, desenvolvido com PHP, HTML, CSS e JavaScript.

## Funcionalidades
- Página inicial com apresentação da loja.
- Catálogo demonstrativo com três veículos fictícios.
- Formulário de interesse com validação básica.
- Layout responsivo para computador e celular.
- Workflow do GitHub Actions para verificar a sintaxe dos arquivos PHP.

## Requisitos
- PHP 8.2 ou superior.
- Navegador atualizado.
- Git e GitHub Desktop (para as atividades de versionamento).

## Como executar localmente
1. Instale o PHP ou utilize um ambiente local que ofereça suporte a PHP.
2. Abra o terminal na pasta do projeto.
3. Execute: `php -S localhost:8000`
4. Acesse `http://localhost:8000` no navegador.

Também é possível colocar a pasta dentro do diretório público de um ambiente local com PHP, como XAMPP, e acessar pelo endereço local correspondente.

## Estrutura
- `index.php`: página inicial e catálogo.
- `cadastro.php`: formulário demonstrativo.
- `assets/css/style.css`: estilos.
- `assets/js/script.js`: validação no navegador.
- `.github/workflows/verificacao.yml`: automação de verificação PHP.

## GitHub Actions
O workflow é executado em eventos `push` e `pull_request`. Ele prepara PHP 8.2 e executa `php -l` em todos os arquivos PHP do projeto.

A verificação de sintaxe não garante que todas as funções do site estejam corretas. Testes adicionais seriam necessários para validar banco de dados, navegação e regras de negócio.

## Observação importante
Este é um protótipo escolar. Os veículos e valores são fictícios. O formulário apenas demonstra validação e confirmação na tela: ele não salva dados, não envia e-mail e não utiliza banco de dados. Não informe dados pessoais reais.

## Publicação
O GitHub Pages não executa PHP. Para publicar este projeto completo, utilize uma hospedagem com suporte a PHP. O GitHub Pages pode hospedar somente uma versão estática adaptada, sem processamento PHP.
