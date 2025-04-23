<style>
    :root {
        color-scheme: dark light;
    }

    body {
        display: grid;
        place-content: center;
        font-family: cursive;
    }

    h3 {
        text-align: center;
    }

    .container {
        width: 300px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .container input {
        padding: 10px;
        font-size: 16px;
        outline: none;
        border: none;
        border-bottom: 1px solid;
        border-radius: 4px;
        font-family: inherit;
    }

    .container button {
        padding: 7px;
        font-size: 16px;
        border: none;
        font-family: inherit;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 25px;

        &:hover {
            background-color: #218838;
        }
    }

    .mensajes_anteriores {
        text-align: center;
    }
</style>