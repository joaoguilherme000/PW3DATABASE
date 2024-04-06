<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Tailwind Projeto</title>
</head>
<body class="bg-gray-100 p-6">
    <div class="md:container md:mx-auto bg-white p-8 rounded shadow my-2">
        <h1 class="text-2xl font-bold mb-4">Faça uma Pergunta</h1>
        <form action="adicionar_pergunta.php" method="POST">
            <div class="mb-4">
                <label for="titulo" class="block text-gray-700 font-bold mb-2">Título:</label>
                <input type="text" id="titulo" name="titulo" class="w-full border rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label for="descricao" class="block text-gray-700 font-bold mb-2">Descrição:</label>
                <textarea id="descricao" name="descricao" class="w-full border rounded px-3 py-2"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Enviar Pergunta</button>
        </form>
    </div>
    <div class="size-96 bg-slate-900 p-8 shadow mt-3 flex flex-column">
        <div class="p-4 shadow rounded mt-1">
            <div class="mb-4">
                <label for="Pergunta" class="block text-white text-lg font-bold mb-2">Pergunta:</label>
            </div>
            <div class="mb-4">
                <label for="descricao" class="block text-white font-bold mb-2">Resposta</label>
                <textarea id="descricao" name="descricao" class="w-full border rounded px-3 py-2"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Enviar Resposta</button>
        <div>
        <div class="p-4 shadow rounded mt-1">
            <div class="mb-4">
                <label for="Pergunta" class="block text-white text-lg font-bold mb-2">Pergunta:</label>
            </div>
            <div class="mb-4">
                <label for="descricao" class="block text-white font-bold mb-2">Resposta</label>
                <textarea id="descricao" name="descricao" class="w-full border rounded px-3 py-2"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Enviar Resposta</button>
        <div>
    </div>
</body>
</html>