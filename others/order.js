document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    const orderTable = document.getElementById('order-table');
    const orderItems = [];
  
    checkboxes.forEach(function(checkbox) {
      checkbox.addEventListener('change', function() {
        if (this.checked) {
          const item = this.value.split('|');
          orderItems.push({ name: item[0], price: item[1] });
        } else {
          orderItems.splice(orderItems.findIndex(item => item.name === this.value.split('|')[0]), 1);
        }
        generateTable(orderItems);
      });
    });
  
    function generateTable(items) {
      orderTable.innerHTML = 'home.html';
      const tableBody = document.createElement('tbody');
      items.forEach(function(item) {
        const row = document.createElement('tr');
        const nameCell = document.createElement('td');
        const priceCell = document.createElement('td');
        nameCell.textContent = item.name;
        priceCell.textContent = '&#8377 ' + item.price;
        row.appendChild(nameCell);
        row.appendChild(priceCell);
        tableBody.appendChild(row);
      });
      orderTable.appendChild(tableBody);
    }
  });