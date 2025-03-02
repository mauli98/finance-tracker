<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Budget Dashboard</h1>
        <div id="budget-progress">
            <!-- Budget progress bars will be dynamically generated here -->
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        // Fetch budget data and render progress bars
        fetch('/budgets')
            .then(response => response.json())
            .then(budgets => {
                const budgetProgress = document.getElementById('budget-progress');
                budgets.forEach(budget => {
                    const progressBar = document.createElement('div');
                    progressBar.className = 'progress-bar';
                    progressBar.style.width = (budget.spent / budget.amount) * 100 + '%';
                    progressBar.innerText = `${budget.category}: $${budget.spent} / $${budget.amount}`;
                    budgetProgress.appendChild(progressBar);
                });
            });
    </script>
</body>
</html>
