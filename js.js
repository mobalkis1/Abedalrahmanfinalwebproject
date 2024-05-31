let totalSalary = 0;

function add(button) {
   
    let container = button.closest('.center');
    
   
    let priceElement = container.querySelector('.price');
    
   
    if (priceElement) {
       
        let price = parseFloat(priceElement.textContent);

        
        if (!isNaN(price)) {
            totalSalary += price;
           
            document.getElementById("value").innerHTML = totalSalary+"$";
        } 
    } 

}


function remove(button) {
    
    let container = button.closest('.center');
    
   
    let priceElement = container.querySelector('.price');
    
   
    if (priceElement) {
       
        let price = parseFloat(priceElement.textContent);

       
        if (!isNaN(price)) {
            totalSalary -= price;
            
            document.getElementById("value").innerHTML = totalSalary+" $";
        } 
    } 

}

















