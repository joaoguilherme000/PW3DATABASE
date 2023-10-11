// Variáveis de controle
let currentPlayer = 'X';
let gameOver = false;

// Função para alternar entre 'X' e 'O'
function togglePlayer() {
    currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
}

// Função para verificar o vencedor
function checkWinner() {
    const cells = document.querySelectorAll('.cell');
    const winningCombinations = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8],
        [0, 3, 6], [1, 4, 7], [2, 5, 8],
        [0, 4, 8], [2, 4, 6]
    ];

    for (const combo of winningCombinations) {
        const [a, b, c] = combo;
        if (cells[a].textContent && cells[a].textContent === cells[b].textContent && cells[b].textContent === cells[c].textContent) {
            return cells[a].textContent;
        }
    }

    return null;
}

// Função para lidar com a jogada do jogador
function handleCellClick(event) {
    const cell = event.target;
    if (!cell.textContent && !gameOver) {
        cell.textContent = currentPlayer;
        const winner = checkWinner();
        if (winner) {
            alert(`Jogador ${winner} venceu!`);
            gameOver = true;
        } else {
            togglePlayer();
        }
    }
}

// Adicione eventos de clique às células
const cells = document.querySelectorAll('.cell');
cells.forEach(cell => cell.addEventListener('click', handleCellClick));
