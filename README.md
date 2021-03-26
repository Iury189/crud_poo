### Sobre o código <h3>
O código em questão trata-se de um CRUD feito em PHP Orientado a Objeto com as funções de inserção, listagem, atualização e exclusão.

### Sobre as pasta <h3>
* /classes:
   * aluno.php: Arquivo que possui a classe **Aluno**.
* /conexao: 
  * config.php: Arquivo que possui as configurações do banco de dados do sistema.
  * conexao.php: Arquivo que cria a classe **BD** para a integração do MySQL Workbench ao PHP.
* /dao:
   * alunoDAO.php: Arquivo que possui a classe **AlunoDAO extendida da classe Aluno**, da qual possui os métodos de **Insert(), Select(), Update() e Delete()**.
* /formulario: 
  * atualizar.php: Código que faz a operação de atualização.
  * excluir.php: Código que faz a operação de exclusão.
  * form_atualizar.php: Formulário de atualização (que redireciona para a página de atualização).
  * form_excluir.php: Formulário de exclusão (que redireciona para a página de exclusão).
  * form_inserir.php: Formulário de inserção (que redireciona para a página de inserção).
  * form_listar.php: Página de listagem de alunos com um campo de busca para achar determinado(s) aluno(s).
  * inserir.php: Código que faz a operação de inserção.
* /js:
  * select_aluno.js: Arquivo que realiza a filtragem do aluno.
* /json: 
  * id_aluno.php: Arquivo que faz a busca de determinado aluno pelo seu ID.
  * requisicao_aluno.js: Arquivo que faz a requisição dos dados de determinado aluno pelo seu ID.
* index.php: Arquivo inicial do código. 
