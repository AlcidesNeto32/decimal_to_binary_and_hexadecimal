# 🔢 Conversor de Decimal para Binário e Hexadecimal

Um conversor numérico simples, elegante e funcional desenvolvido em **PHP**, **HTML5** e **CSS3**. Este projeto transforma números inteiros decimais em suas representações nas bases **Binária** e **Hexadecimal** utilizando algoritmos manuais de conversão.

## 🚀 Funcionalidades

-   **Conversão para Binário:** Transforma números decimais em sequências de 0s e 1s.
-   **Conversão para Hexadecimal:** Transforma números decimais em base 16 (0-9, A-F).
-   **Interface Responsiva:** Design moderno que se adapta a dispositivos móveis e desktops.
-   **Validação de Dados:** Verifica se os campos foram preenchidos antes de realizar o cálculo.

## 🛠️ Tecnologias Utilizadas

-   **PHP 8+**: Lógica de processamento e algoritmos de conversão.
-   **HTML5**: Estrutura do formulário e interface.
-   **CSS3**: Estilização moderna (Flexbox, sombras, arredondamentos).

## 💡 Como funciona a lógica?

Diferente de usar funções prontas do PHP (como `decbin()` ou `dechex()`), este projeto utiliza algoritmos de **divisões sucessivas**:
1.  O número decimal é dividido pela base desejada (2 ou 16).
2.  O resto da divisão é armazenado em um array.
3.  O quociente torna-se o novo número a ser dividido.
4.  O processo se repete até que o número chegue a zero.
5.  O resultado final é a leitura invertida dos restos armazenados.

## 📋 Pré-requisitos

Para rodar este projeto localmente, você precisará de um servidor PHP instalado:
* [XAMPP](https://www.apachefriends.org/pt_br/index.html)
* [WampServer](https://www.wampserver.com/)
* Ou o servidor embutido do próprio PHP.

## 🔧 Como Rodar o Projeto

1.  Clone este repositório ou baixe o arquivo `.php`.
2.  Coloque o arquivo na pasta raiz do seu servidor local (ex: `htdocs` no XAMPP).
3.  Inicie o servidor Apache.
4.  Abra o navegador e acesse:
    ```
    http://localhost/nome-do-seu-arquivo.php
    ```

## 📸 Demonstração da Interface

> ![Demonstração_home_screen](img/home_screen.jpeg)
> ![Demonstração_binario](img/binary.jpeg)
> ![Demonstração_hexadecimal](img/hexadecimal.jpeg)



> A interface utiliza um esquema de cores limpo, com botões de rádio estilizados e caixas de alerta verdes para resultados e vermelhas para erros de preenchimento.

---
Desenvolvido para fins de estudo sobre lógica de programação e integração Front/Back-end.
