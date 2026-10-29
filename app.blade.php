
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f7fa;
    color: #263746;
    line-height: 1.6;
}

header {
    background-color: #087e8b;
    color: white;
    text-align: center;
    padding: 25px;
}

header h1 {
    margin-bottom: 5px;
}

nav {
    margin-top: 15px;
}

nav a {
    color: white;
    text-decoration: none;
    margin: 0 15px;
    font-weight: bold;
}

nav a:hover {
    color: #ffe082;
}

.container {
    max-width: 1000px;
    min-height: 60vh;
    margin: 30px auto;
    padding: 25px;
    background-color: white;
    border-radius: 10px;
}

.hero {
    text-align: center;
    padding: 25px 10px;
}

.hero h2 {
    color: #087e8b;
    font-size: 30px;
}

.destinations {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.destination {
    flex: 1 1 200px;
    padding: 20px;
    background-color: #e1f3f5;
    border-radius: 8px;
    border-bottom: 4px solid #087e8b;
}

.destination h3 {
    color: #075e68;
}

.info {
    padding: 20px;
    background-color: #e1f3f5;
    border-radius: 8px;
}

.info h2 {
    color: #075e68;
}

footer {
    background-color: #263746;
    color: white;
    text-align: center;
    padding: 15px;
    margin-top: 20px;
}

@media (max-width: 600px) {
    .container {
        margin: 15px;
        padding: 15px;
    }

    .destinations {
        flex-direction: column;
    }
}
