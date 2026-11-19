# Roteiro das atividades práticas — Infinity Cars

Este roteiro acompanha o trabalho de Fundamentos de DevOps. Execute as etapas no seu próprio GitHub e registre evidências (prints) das ações realizadas.

## Atividade 1 — Criar repositório e enviar o site
1. Crie no GitHub um repositório chamado `infinity-cars`.
2. Abra o GitHub Desktop e entre na sua conta.
3. Adicione a pasta local `infinity-cars` como repositório local.
4. Se necessário, escolha criar o repositório Git nessa pasta.
5. Faça o commit inicial com a mensagem `Primeira versão do Infinity Cars`.
6. Clique em Publish repository.
7. Confira no navegador se os arquivos aparecem no GitHub.

## Atividade 2 — Simular trabalho em equipe
1. Crie uma branch chamada `feature-atualiza-inicio`.
2. Faça uma pequena alteração no texto da página inicial (`index.php`).
3. Registre com commit: `Atualiza texto da pagina inicial`.
4. Envie a branch ao GitHub e abra um Pull Request.
5. Revise as alterações e faça o merge para a branch principal.
6. Para simular a segunda pessoa, crie outra branch chamada `feature-estilo-catalogo` e altere um detalhe visual em `assets/css/style.css`.

Respostas conceituais:
- Branch separa o desenvolvimento de uma alteração do código principal.
- Commit registra um conjunto de alterações no histórico.
- Git controla versões; GitHub hospeda e compartilha repositórios.
- Evita que alterações em andamento afetem diretamente a versão principal.
- Pull Request é uma solicitação para revisar e integrar alterações.

## Atividade 3 — Criar automação CI com GitHub Actions
O arquivo `.github/workflows/verificacao.yml` já está incluído no projeto.
1. Confira se ele aparece no repositório exatamente nesse caminho.
2. Faça commit com a mensagem `Adiciona verificacao automatica PHP`.
3. Envie as alterações ao GitHub.
4. Abra a aba Actions e confira a execução do workflow `Verificacao do Projeto PHP`.

Resultado esperado: a automação executa o comando `php -l` nos arquivos PHP. Um check verde indica que a verificação de sintaxe terminou sem erros.

## Atividade 4 — Simular e corrigir um erro
Faça esta demonstração somente em uma branch de teste:
1. Crie uma branch chamada `teste-erro-php`.
2. Guarde uma cópia do `index.php`.
3. Em uma linha de PHP, remova temporariamente um caractere necessário à sintaxe, sem alterar a branch principal.
4. Faça commit e push.
5. Confira a falha na aba Actions e leia o log.
6. Restaure o código correto.
7. Faça outro commit e push.
8. Confira se a automação voltou a passar.
9. Não faça merge da versão com erro para a branch principal.

## Atividade 5 — Publicação
O projeto usa PHP, portanto o GitHub Pages não consegue executar o site completo. Para publicar a versão funcional, é necessária uma hospedagem com suporte a PHP. O Pages pode ser usado apenas para uma versão estática separada, sem PHP.

## Evidências recomendadas para apresentar
- Repositório `infinity-cars` no GitHub.
- Histórico de commits.
- Branch e Pull Request.
- Aba Actions com uma execução bem-sucedida.
- Execução de teste com falha e execução corrigida.
- Site aberto localmente em um navegador.

## Limites deste protótipo
O formulário é demonstrativo e não grava dados. O catálogo utiliza dados fictícios em um array PHP e não consulta banco de dados. O teste do workflow verifica sintaxe PHP, não o comportamento completo do site.
