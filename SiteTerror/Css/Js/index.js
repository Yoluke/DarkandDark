// Seleciona o formulário de login
const loginForm = document.getElementById("login-form");

// Adiciona um ouvinte de evento para quando o formulário for enviado
loginForm.addEventListener("submit", (e) => {
e.preventDefault(); // Previne o comportamento padrão do formulário

// Obtém o nome de usuário e senha inseridos pelo usuário
const username = e.target.elements.username.value;
const password = e.target.elements.password.value;

// Verifica se o nome de usuário e senha estão corretos
if (username === "Lucas" && password === "1234") {
window.location.href = "main_page.html"; // Redireciona para a página principal
} else {
alert("Usuário ou senha incorretos"); // Mostra uma mensagem de erro ao usuário
}
});

// Formulário de login com campos para nome de usuário, senha e botão para enviar

<form id="login-form" class="login-form">
  <h2>Login</h2>
  <label for="username">Usuário:</label>
  <input type="text" id="username" name="username" required>
  <label for="password">Senha:</label>
  <input type="password" id="password" name="password" required>
  <button type="submit">Entrar</button>
  <button type="button" onclick="window.location.href = 'index.html'">Cadastrar</button>
</form>
