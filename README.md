## Media Monitoring CRM

Portal de media intelligence para o património cultural imaterial e a propriedade intelectual, no âmbito da Fonte Culture.

Projeto académico. O cenário descrito abaixo é fictício e serve fins de aprendizagem.

## O conceito

A Fonte Culture é uma associação sem fins lucrativos, sediada em Genebra, dedicada à salvaguarda do património cultural imaterial (ICH) e a abordagens responsáveis ao conhecimento cultural e à propriedade intelectual. Como tantas organizações do setor, precisa de financiamento para manter as suas atividades.

Neste cenário, a associação decide fazer algo simples: partilhar o que já sabe fazer. A partir da sua posição e do seu conhecimento do setor, passa a oferecer uma solução de media intelligence centrada no ICH e na propriedade intelectual, isto é, uma forma organizada de acompanhar o que se publica e se discute sobre estes temas. As receitas geradas revertem para o trabalho da própria associação.

A solução destina-se a quem precisa de acompanhar este universo e raramente tem tempo para o fazer: instituições de património, museus, comunidades e grupos portadores de tradições, investigadores, organizações e redes internacionais, juristas e decisores políticos, parceiros e financiadores. Com ela, estes stakeholders podem:
- perceber como o património vivo é retratado nos media e que temas ganham ou perdem visibilidade;
- seguir o debate sobre conhecimento tradicional, expressões culturais e direitos;
- identificar a tempo menções, tendências e situações que merecem atenção;
- apoiar decisões, candidaturas e relatórios com informação reunida num só lugar.

Para a associação, é uma forma de financiar a missão sem se afastar dela. Para quem usa o serviço, é a garantia de que a informação vem de quem conhece o terreno.

## Como funciona

Os relatórios de monitorização são painéis do Looker Studio, apresentados dentro da aplicação. O acesso depende da categoria de usuarios:

# Perfis & Permissoes
- Visitante (sem sessão) :	Ver apenas os títulos dos reports ativos
- Utilizador registado :	Aceder aos reports ativos e escolher qual abrir
- Administrador: 	Criar, editar, apagar, ativar e desativar reports

Os reports inativos só o administrador os vê.

# Tecnologia

- Laravel 13
- Fortify (autenticação)
- MySQL, 
- Blade e,
- Looker Studio (relatórios incorporados).


