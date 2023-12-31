# CodeExpert - Trabalhando com ACL no Laravel

https://codeexperts.com.br/


## <a name="indice">Índice</a>

1. [1. Boas Vindas](#parte1)
2. [01 - Boas Vindas](#parte2)
3. [02 - Quem sou eu](#parte3)
4. [03 - Pontos Importantes](#parte4)
5. [04 - Do Projeto](#parte5)
6. [2. Fórum: Tópicos e Respostas](#parte6)
7. [05 - Iniciando Projeto](#parte7)
8. [06 - Migrações Tópicos e Respostas](#parte8)
9. [07 - Migrando Dados](#parte9)
10. [08 - Mapeando Models](#parte10)
11. [09 - Dependências do Front](#parte11)
12. [10 - Trabalhando em Tópicos](#parte12)
13. [11 - Listando Tópicos](#parte13)
14. [12 - Usuários e Tópicos Fakes](#parte14)
15. [13 - Views de Tópico e Navegação](#parte15)
16. [14 - Visualizando Tópico](#parte16)
17. [15 - Edição de Tópico](#parte17)
18. [16 - Removendo Tópico](#parte18)
19. [17 - Criando Tópico](#parte19)
20. [18 - Respondendo Tópico](#parte20)
21. [19 - Listando Respostas do Tópico](#parte21)
22. [20 - Mensagens de Execução](#parte22)
23. [21 - Conclusões](#parte23)
24. [3. Fórum: Canais e Melhorias](#parte24)
25. [22 - Iniciando Canais](#parte25)
26. [23 - Migração Canal](#parte26)
27. [24 - Dados Fake Canais e mais](#parte27)
28. [25 - Tópicos por Canal](#parte28)
29. [26 - Criando Tópico com Canal](#parte29)
30. [27 - Menu de Canais](#parte30)
31. [28 - Validações Tópicos e Respostas](#parte31)
32. [29 - Melhorias Telas Tópico](#parte32)
33. [30 - Conclusões](#parte33)
34. [4. Prelúdio: ACL](#parte34)
35. [31 - Introdução](#parte35)
36. [32 - O que é ACL?](#parte36)
37. [33 - ACL no Laravel](#parte37)
38. [34 - Guards na Prática](#parte38)
39. [35 - Policies na Prática](#parte39)
40. [36 - Conclusões](#parte40)
41. [5. Nosso Controle de Acesso](#parte41)
42. [37 - Introdução](#parte42)
43. [38 - Mapeando Recursos e Papéis](#parte43)
44. [39 - Relação de Papéis e Recursos](#parte44)
45. [40 - Relações nos Models](#parte45)
46. [41 - Testando Relações](#parte46)
47. [42 - Gates Dinâmicos](#parte47)
48. [43 - Globalizando Controle de Acesso](#parte48)
49. [44 - Dinamizando Check de Controle de Acesso](#parte49)
50. [45 - Ignorando Check de Permissão](#parte50)
51. [46 - Conclusões](#parte51)
52. [6. Menus Dinâmicos](#parte52)
53. [47 - Introdução](#parte53)
54. [48 - Arquivos Manager](#parte54)
55. [49 - Comentários Manager](#parte55)
56. [50 - Dinamizando Menu](#parte56)
57. [51 - Melhorando Código Menu](#parte57)
58. [52 - Iniciando Módulos](#parte58)
59. [53 - Relacionamentos Módulo](#parte59)
60. [54 - Exibindo Módulos e Recursos](#parte60)
61. [55 - Filtrando Recursos Por Papél](#parte61)
62. [56 - Nosso ACL no Manager](#parte62)
63. [57 - Seed de Recursos](#parte63)
64. [58 - Controlando Carregamento de Menu](#parte64)
65. [59 - ACL Método Before](#parte65)
66. [60 - Sobre Tela CRUD Módulos](#parte66)
67. [61 - Admin Menu](#parte67)
68. [62 - Condicionais Menu Admin e Melhorias](#parte68)
69. [63 - Conclusões e HasTable Melhoria](#parte69)
70. [7. Migrando Versão Laravel 8,9,10](#parte70)
71. [64 - Atualizando Projeto Laravel 8](#parte71)
72. [65 - Aproveitando e Instalando DebugBar](#parte72)
73. [66 - Atualizando Projeto Laravel 9](#parte73)
74. [67 - Atualizando para Laravel 10](#parte74)
75. [8. Algumas Otimizações Finais](#parte75)
76. [68 - Introdução](#parte76)
77. [69 - Melhorias Chamadas de Autor e Canal](#parte77)
78. [70 - Melhorias Count de Respostas](#parte78)
79. [71 - Organizando Listagem de Threads e Filtro](#parte79)
80. [72 - Finalizando](#parte80)
---


## <a name="parte1">1 - 1. Boas Vindas</a>



[Voltar ao Índice](#indice)

---


## <a name="parte2">2 - 01 - Boas Vindas</a>



[Voltar ao Índice](#indice)

---


## <a name="parte3">3 - 02 - Quem sou eu</a>



[Voltar ao Índice](#indice)

---


## <a name="parte4">4 - 03 - Pontos Importantes</a>



[Voltar ao Índice](#indice)

---


## <a name="parte5">5 - 04 - Do Projeto</a>



[Voltar ao Índice](#indice)

---


## <a name="parte6">6 - 2. Fórum: Tópicos e Respostas</a>



[Voltar ao Índice](#indice)

---


## <a name="parte7">7 - 05 - Iniciando Projeto</a>



[Voltar ao Índice](#indice)

---


## <a name="parte8">8 - 06 - Migrações Tópicos e Respostas</a>



[Voltar ao Índice](#indice)

---


## <a name="parte9">9 - 07 - Migrando Dados</a>



[Voltar ao Índice](#indice)

---


## <a name="parte10">10 - 08 - Mapeando Models</a>



[Voltar ao Índice](#indice)

---


## <a name="parte11">11 - 09 - Dependências do Front</a>



[Voltar ao Índice](#indice)

---


## <a name="parte12">12 - 10 - Trabalhando em Tópicos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte13">13 - 11 - Listando Tópicos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte14">14 - 12 - Usuários e Tópicos Fakes</a>



[Voltar ao Índice](#indice)

---


## <a name="parte15">15 - 13 - Views de Tópico e Navegação</a>



[Voltar ao Índice](#indice)

---


## <a name="parte16">16 - 14 - Visualizando Tópico</a>



[Voltar ao Índice](#indice)

---


## <a name="parte17">17 - 15 - Edição de Tópico</a>



[Voltar ao Índice](#indice)

---


## <a name="parte18">18 - 16 - Removendo Tópico</a>



[Voltar ao Índice](#indice)

---


## <a name="parte19">19 - 17 - Criando Tópico</a>



[Voltar ao Índice](#indice)

---


## <a name="parte20">20 - 18 - Respondendo Tópico</a>



[Voltar ao Índice](#indice)

---


## <a name="parte21">21 - 19 - Listando Respostas do Tópico</a>



[Voltar ao Índice](#indice)

---


## <a name="parte22">22 - 20 - Mensagens de Execução</a>



[Voltar ao Índice](#indice)

---


## <a name="parte23">23 - 21 - Conclusões</a>



[Voltar ao Índice](#indice)

---


## <a name="parte24">24 - 3. Fórum: Canais e Melhorias</a>



[Voltar ao Índice](#indice)

---


## <a name="parte25">25 - 22 - Iniciando Canais</a>



[Voltar ao Índice](#indice)

---


## <a name="parte26">26 - 23 - Migração Canal</a>



[Voltar ao Índice](#indice)

---


## <a name="parte27">27 - 24 - Dados Fake Canais e mais</a>



[Voltar ao Índice](#indice)

---


## <a name="parte28">28 - 25 - Tópicos por Canal</a>



[Voltar ao Índice](#indice)

---


## <a name="parte29">29 - 26 - Criando Tópico com Canal</a>



[Voltar ao Índice](#indice)

---


## <a name="parte30">30 - 27 - Menu de Canais</a>



[Voltar ao Índice](#indice)

---


## <a name="parte31">31 - 28 - Validações Tópicos e Respostas</a>



[Voltar ao Índice](#indice)

---


## <a name="parte32">32 - 29 - Melhorias Telas Tópico</a>



[Voltar ao Índice](#indice)

---


## <a name="parte33">33 - 30 - Conclusões</a>



[Voltar ao Índice](#indice)

---


## <a name="parte34">34 - 4. Prelúdio: ACL</a>



[Voltar ao Índice](#indice)

---


## <a name="parte35">35 - 31 - Introdução</a>



[Voltar ao Índice](#indice)

---


## <a name="parte36">36 - 32 - O que é ACL?</a>



[Voltar ao Índice](#indice)

---


## <a name="parte37">37 - 33 - ACL no Laravel</a>



[Voltar ao Índice](#indice)

---


## <a name="parte38">38 - 34 - Guards na Prática</a>



[Voltar ao Índice](#indice)

---


## <a name="parte39">39 - 35 - Policies na Prática</a>



[Voltar ao Índice](#indice)

---


## <a name="parte40">40 - 36 - Conclusões</a>



[Voltar ao Índice](#indice)

---


## <a name="parte41">41 - 5. Nosso Controle de Acesso</a>



[Voltar ao Índice](#indice)

---


## <a name="parte42">42 - 37 - Introdução</a>



[Voltar ao Índice](#indice)

---


## <a name="parte43">43 - 38 - Mapeando Recursos e Papéis</a>



[Voltar ao Índice](#indice)

---


## <a name="parte44">44 - 39 - Relação de Papéis e Recursos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte45">45 - 40 - Relações nos Models</a>



[Voltar ao Índice](#indice)

---


## <a name="parte46">46 - 41 - Testando Relações</a>



[Voltar ao Índice](#indice)

---


## <a name="parte47">47 - 42 - Gates Dinâmicos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte48">48 - 43 - Globalizando Controle de Acesso</a>



[Voltar ao Índice](#indice)

---


## <a name="parte49">49 - 44 - Dinamizando Check de Controle de Acesso</a>



[Voltar ao Índice](#indice)

---


## <a name="parte50">50 - 45 - Ignorando Check de Permissão</a>



[Voltar ao Índice](#indice)

---


## <a name="parte51">51 - 46 - Conclusões</a>



[Voltar ao Índice](#indice)

---


## <a name="parte52">52 - 6. Menus Dinâmicos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte53">53 - 47 - Introdução</a>



[Voltar ao Índice](#indice)

---


## <a name="parte54">54 - 48 - Arquivos Manager</a>



[Voltar ao Índice](#indice)

---


## <a name="parte55">55 - 49 - Comentários Manager</a>



[Voltar ao Índice](#indice)

---


## <a name="parte56">56 - 50 - Dinamizando Menu</a>



[Voltar ao Índice](#indice)

---


## <a name="parte57">57 - 51 - Melhorando Código Menu</a>



[Voltar ao Índice](#indice)

---


## <a name="parte58">58 - 52 - Iniciando Módulos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte59">59 - 53 - Relacionamentos Módulo</a>



[Voltar ao Índice](#indice)

---


## <a name="parte60">60 - 54 - Exibindo Módulos e Recursos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte61">61 - 55 - Filtrando Recursos Por Papél</a>



[Voltar ao Índice](#indice)

---


## <a name="parte62">62 - 56 - Nosso ACL no Manager</a>



[Voltar ao Índice](#indice)

---


## <a name="parte63">63 - 57 - Seed de Recursos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte64">64 - 58 - Controlando Carregamento de Menu</a>



[Voltar ao Índice](#indice)

---


## <a name="parte65">65 - 59 - ACL Método Before</a>



[Voltar ao Índice](#indice)

---


## <a name="parte66">66 - 60 - Sobre Tela CRUD Módulos</a>



[Voltar ao Índice](#indice)

---


## <a name="parte67">67 - 61 - Admin Menu</a>



[Voltar ao Índice](#indice)

---


## <a name="parte68">68 - 62 - Condicionais Menu Admin e Melhorias</a>



[Voltar ao Índice](#indice)

---


## <a name="parte69">69 - 63 - Conclusões e HasTable Melhoria</a>



[Voltar ao Índice](#indice)

---


## <a name="parte70">70 - 7. Migrando Versão Laravel 8,9,10</a>



[Voltar ao Índice](#indice)

---


## <a name="parte71">71 - 64 - Atualizando Projeto Laravel 8</a>



[Voltar ao Índice](#indice)

---


## <a name="parte72">72 - 65 - Aproveitando e Instalando DebugBar</a>



[Voltar ao Índice](#indice)

---


## <a name="parte73">73 - 66 - Atualizando Projeto Laravel 9</a>



[Voltar ao Índice](#indice)

---


## <a name="parte74">74 - 67 - Atualizando para Laravel 10</a>



[Voltar ao Índice](#indice)

---


## <a name="parte75">75 - 8. Algumas Otimizações Finais</a>



[Voltar ao Índice](#indice)

---


## <a name="parte76">76 - 68 - Introdução</a>



[Voltar ao Índice](#indice)

---


## <a name="parte77">77 - 69 - Melhorias Chamadas de Autor e Canal</a>



[Voltar ao Índice](#indice)

---


## <a name="parte78">78 - 70 - Melhorias Count de Respostas</a>



[Voltar ao Índice](#indice)

---


## <a name="parte79">79 - 71 - Organizando Listagem de Threads e Filtro</a>



[Voltar ao Índice](#indice)

---


## <a name="parte80">80 - 72 - Finalizando</a>



[Voltar ao Índice](#indice)

---

