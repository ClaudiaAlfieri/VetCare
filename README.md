# VetCare

Projeto da Unidade de Formação **UC 604 - Programar para a web, na vertente frontend (cliente-side)**.

A VetCare é uma aplicação para ajudar a gerir uma clínica veterinária: registar animais, consultas, veterinários e serviços.

---

## Elementos do grupo

- Claudia Jorge de Santis Alfieri
- Ricardo Brauner de Carvalho Lopes

---

## O que é a aplicação

Quem visita o site sem fazer login consegue ver a página inicial, com informação geral sobre a clínica.

Depois de fazer login, existem dois tipos de conta diferentes:

- **Tutor (user)** — pode ver e gerir os seus próprios animais (os que ele é dono). Não consegue ver nem mexer nos animais de outras pessoas.
- **Admin** — pode fazer tudo o que o tutor faz, mas sobre todos os animais, e ainda consegue gerir os veterinários, os serviços da clínica e marcar/editar consultas.

---

## Funcionalidades principais

- **Página inicial** — com informação sobre a clínica, visível sem precisar de login.
- **Login e logout** — não há registo de contas novas, os utilizadores já vêm criados pela base de dados (ver "Contas para testar" mais abaixo).
- **Gestão de animais** — criar, ver, editar e apagar. Cada animal tem nome, espécie, data de nascimento, tutor e uma foto (opcional). Um tutor só vê e consegue mexer nos seus próprios animais; se tentar aceder a um animal de outra pessoa diretamente pelo link, aparece um erro de acesso negado. O admin vê e mexe em todos os animais.
- **Gestão de consultas** (só o admin) — criar, ver, editar e apagar consultas, escolhendo o animal, o veterinário e os serviços feitos.
- **Gestão de serviços** (só o admin) — criar, ver, editar e apagar os serviços da clínica (ex: vacinação, consulta de rotina).
- **Gestão de veterinários** (só o admin) — criar, ver, editar e apagar veterinários.
- **Notas** — os animais e as consultas podem ter notas associadas, usando a mesma tabela de notas para as duas coisas (é o exemplo da relação polimórfica pedida no enunciado). As notas já aparecem nas páginas de detalhe do animal e da consulta; por agora, para criar uma nota nova é preciso fazer diretamente na base de dados.
- **Eliminação suave (soft delete)** — quando se apaga um animal, veterinário, serviço ou consulta, o registo não desaparece de vez da base de dados, só fica marcado como "apagado" e deixa de aparecer nas listas.
- **Pesquisa, filtros e paginação** — nas listas de animais, consultas e serviços, já funcionam de verdade (não são só visuais).
- **Mensagens de aviso** — a avisar quando algo corre bem (ex: "Animal registado com sucesso") ou quando falta preencher alguma coisa num formulário.

---

## Como correr o projeto (migrations e seeders)

1. Instalar as dependências:
   ```bash
   composer install
   npm install
   ```

2. Criar o ficheiro `.env` e gerar a chave da aplicação:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. Confirmar que o `.env` está configurado para usar a base de dados (por defeito já está em SQLite).

4. Criar as tabelas e colocar dados de teste (migrations + seeders):
   ```bash
   php artisan migrate --seed
   ```

5. Correr este comando para as fotos dos animais funcionarem:
   ```bash
   php artisan storage:link
   ```

6. Compilar o CSS/JS:
   ```bash
   npm run build
   ```

7. Ligar o servidor:
   ```bash
   php artisan serve
   ```

8. Abrir `http://localhost:8000` no browser.

---

## Contas para testar (utilizadores e roles)

| Nome | Email | Password | Tipo de conta (role) |
|---|---|---|---|
| Admin | admin@vetcare.pt | password | admin |
| Ana Silva | user@vetcare.pt | password | user (tutora) |
| João Santos | joao@vetcare.pt | password | user (tutor) |
| Maria Costa | maria@vetcare.pt | password | user (tutora) |

---

## Como está organizada a base de dados

- **users** — as contas (admins e tutores).
- **pets** — os animais, cada um com uma espécie e um dono (tutor).
- **species** — as espécies possíveis (Cão, Gato, Coelho, Ave).
- **veterinarians** — os veterinários da clínica.
- **appointments** — as consultas, cada uma ligada a um animal e a um veterinário.
- **services** — os serviços que a clínica oferece (ex: vacinação).
- **appointment_service** — tabela extra só para ligar consultas a serviços (porque uma consulta pode ter vários serviços, e um serviço pode estar em várias consultas).
- **notes** — as notas, que podem pertencer a um animal ou a uma consulta.

Resumo das relações:
- Um tutor tem vários animais (1 para muitos)
- Uma espécie tem vários animais (1 para muitos)
- Um animal tem várias consultas (1 para muitos)
- Um veterinário tem várias consultas (1 para muitos)
- Uma consulta pode ter vários serviços e um serviço pode estar em várias consultas (muitos para muitos)
- Uma nota pode pertencer a um animal OU a uma consulta (relação polimórfica)

### Diagrama

![Diagrama da base de dados](docs/diagrama-base-dados.png)

---

## Fontes e apoios utilizados

- Documentação do Laravel, do Bootstrap e do pacote Spatie Laravel Permission.
- Os templates HTML que o professor deu, que usámos como ponto de partida para as páginas.
- Usámos a IA Claude (Anthropic) algumas vezes ao longo do projeto, principalmente para perceber erros que apareciam e confirmar se o que estávamos a fazer estava correto.

---

## Declaração de originalidade

Nós, elementos deste grupo, declaramos que este projeto foi feito por nós e representa o nosso trabalho.

Declaramos também que todas as fontes externas, apoios, ferramentas e conteúdos que usámos estão identificados neste README.

Confirmamos que:
- não copiámos código de outros grupos;
- não usámos projetos ou soluções já existentes como se fossem nossos;
- qualquer código ou exemplo de fora que usámos foi percebido e adaptado por nós, não copiado diretamente;
- não usámos a Inteligência Artificial para gerar o projeto por nós, só como apoio pontual para tirar dúvidas e perceber erros;
- não demos o nosso código a outros grupos para eles entregarem como deles.

Ambos os elementos do grupo conhecem a estrutura e o funcionamento geral da aplicação, mesmo as partes que não desenvolveram diretamente.

**Os elementos do grupo**

- Claudia Jorge de Santis Alfieri
- Ricardo Brauner de Carvalho Lopes

---

## O que ainda falta / podia melhorar

- Dar para adicionar notas diretamente pela página do animal ou da consulta (agora só conseguimos testar isso pelo tinker).
- Poder colocar foto também nos veterinários.
- Uma página com estatísticas gerais da clínica (dashboard).
