
<?php
$password = $_POST['password'] ?? null;
if (isset($password)) {
    $hash_ripemd128 = hash('ripemd128', $password);
    $hash_sha1 = hash('sha1', $password);
    $hash_md5 = hash('md5', $password);
    $hash_sha3224 = hash('sha3-224', $password);
}
?>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script>
</head>
<body>
    
    <div style="font-size: 1.8em; font-weight: bold; margin-bottom: 20px; text-align: center"> Hash Calculator </div>
    
<div class="container">
    <div>

        <form action="#" method="POST">
            
            <div class="input">
                <div class="header">
                    <span class="title">Calcule seu <strong>HASH</strong></span>
                    </br>
                    <span class="description">Insira a String:</span>
                </div>
                <div class="content">
                    <input id="password" name="password" cols="50" rows="8">
                </div>
                <button class="btn-copy">Criptografar</button>
            </div>
        </form>

    </div>

    <div>

        <div class="result">
            <div class="header">
                <span class="title"><strong>RIPEMD-128</strong> hash</span>
                </br>
                <span class="description">Hash gerado foi:</span>
            </div>
            <div class="content">
                <?= $hash_ripemd128 ?? 'NAN' ?>
            </div>
            <button class="btn-copy" onclick="copyToClipboard('<?= $hash_ripemd128 ?>')">Copiar</button>
        </div>

        <div class="result">
            <div class="header">
                <span class="title"><strong>SHA1</strong> hash</span>
                </br>
                <span class="description">Hash gerado foi:</span>
            </div>
            <div class="content">
                <?= $hash_sha1 ?? 'NAN' ?>
            </div>
            <button class="btn-copy" onclick="copyToClipboard('<?= $hash_sha1 ?>')">Copiar</button>
        </div>

        <div class="result">
            <div class="header">
                <span class="title"><strong>MD5</strong> hash</span>
                </br>
                <span class="description">Hash gerado foi:</span>
            </div>
            <div class="content">
                <?= $hash_md5 ?? 'NAN' ?>
            </div>
            <button class="btn-copy" onclick="copyToClipboard('<?= $hash_md5 ?>')">Copiar</button>
        </div>

        <div class="result">
            <div class="header">
                <span class="title"><strong>SHA3-224</strong> hash</span>
                </br>
                <span class="description">Hash gerado foi:</span>
            </div>
            <div class="content">
                <?= $hash_sha3224 ?? 'NAN' ?>
            </div>
            <button class="btn-copy" onclick="copyToClipboard('<?= $hash_sha3224 ?>')">Copiar</button>
        </div>
    </div>
</div>

<script>
    function copyToClipboard(texto) {
    const textArea = document.createElement("textarea");
    textArea.value = texto;
    document.body.appendChild(textArea);
    textArea.select();
    try {
        const sucesso = document.execCommand('copy');
        const msg = sucesso ? 'bem-sucedida' : 'mal-sucedida';
        alert(`Comando de cópia de texto foi ${msg}`);
    } catch (erro) {
        alert('Oops, não foi possível copiar');
    }
    document.body.removeChild(textArea);
}
</script>
</body>




<style>
    :root{
        background-color: #131417;
        color: white;
    }

    .container{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
    }

    .btn {
        width: 120px;
        padding: 8px;
        background-color: #1867C0;
        color: white;
        border-radius: 25px;
        border: none;
    }

    .btn:hover {
        cursor: pointer;
    }

    .result {
        border: 1px solid #CCC;
        border-radius: 5px;
        width: 450px;
        margin-bottom: 20px;
    }

    .result .header {
        background-image: linear-gradient(to right, #DA6262, #E67E9B);
        color: white;
        padding: 10px;
    }

    .input{
        border: 1px solid #CCC;
        border-radius: 5px;
        width: 450px;
        margin-bottom: 20px;
    }

    .input .header{
        background-image: linear-gradient(to right, #2FBF84, #27C1C1);
        color: white;
        padding: 10px;
    }

    .content {
        background-color: #262626;
        color: white;
        padding: 10px;
    }

    .btn-copy {
        width: 100%;
        padding: 8px;
        background-color: #F0F0F0;
        border: none;
    }

    .btn-copy:hover {
        background-color: #C8C8C8;
        cursor: pointer;
    }

    input{
        width: 100%;
        background-color: #262626;
        color: white;
        border: white 1px solid;
        border-radius: 5px;
        height: 27px;
    }
</style>