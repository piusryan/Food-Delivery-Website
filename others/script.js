document.querySelectorAll('input[type="checkbox"]').forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        if (this.checked) {
            // Send the value to the server-side script to save to the database
            var value = this.value;
            saveToDatabase(value);
        }
    });
});

function saveToDatabase(value) {
    // Send an AJAX request to the server-side script (e.g., using fetch or XMLHttpRequest)
    // Replace 'save_to_database.php' with your server-side script
    fetch('save_to_database.php', {
        method: 'POST',
        body: JSON.stringify({ value: value }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log('Data saved to database:', data);
    })
    .catch(error => {
        console.error('There was a problem saving data to the database:', error);
    });
}
