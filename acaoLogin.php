    <?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usuarioForm = trim($_POST['usuario']);
        $senhaForm = $_POST['senha'];

        // Verifica se o usuário é o administrador
        if ($usuarioForm == 'adm' && $senhaForm == 'adm1234') {
            // Loga o administrador e redireciona para o home
            $_SESSION['adm'] = 'adm';
            header('Location: home.php');
            exit;
        }

        // Verifica se a lista de usuários existe
        else if (isset($_SESSION['usuarios'])) {
            foreach ($_SESSION['usuarios'] as $usuario) {
                // Compara o nome de usuário e valida a senha
                if ($usuario['usuario'] === $usuarioForm && password_verify($senhaForm, $usuario['senha'])) {
                    // Credenciais válidas
                    $_SESSION['usuario'] = $usuarioForm; // Inicia a sessão do usuário
                    header('Location: home.php');
                    exit;
                }
            }
        }
        //caso os dados inseridos estiverem errados um alerta de erro aparecerá e será redirecionado para login 
        echo "<script>alert('Usuário não encontrado, analise os dados inseridos!');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
        exit;
    }
    
    ?>
