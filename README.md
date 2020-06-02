# RedeTVGlobal
Portal de noticias criado para atender a um cliente. Primeiro projeto remunerado feito por Gabriel Sotto Rodrigues, Guilherme Olimpio China e André Calixto Toscano.

# Descrição da Estrutura de Pastas

Para uma melhor organização do programa, a hierarquia de pastas foi definida da seguinte maneira:
  * docs/: todo documento relacionado a aplicação que não atender a nenhuma outra categoria de pastas.
  * layout/: protótipos e projetos relacionados à elaboração do site.
  * sql/: arquivo .sql do banco de dados, bem como seus backups. A cada mudança do banco de dados, a versão anterior deve ser posta na pasta backups e renomeada para a data do backup.
  * www/: arquivos da aplicação.
    * www/src: recursos da aplicação, como imagens, videos, etc.
    * www/lib: biblioteca de classes da aplicação.
    * www/templates: arquivos front-end da aplicação. Posteriormente deve ser subdivida em outras pastas para html, css, javascript, etc.
    * www/modules: arquivos back-end da aplicação. Deve ser subdivida para cada módulo pensado para aplicação.
