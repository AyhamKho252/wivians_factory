// Function to control accordion behavior based on screen size
function updateAccordionBehavior() {
  const accordionButtons = document.querySelectorAll('.product-banner .accordion-button');
  const accordionItems = document.querySelectorAll('.product-banner .accordion-collapse');

  if (window.innerWidth <= 767) {
    // Enable collapsing on smaller screens
    accordionButtons.forEach(button => {
      button.setAttribute('data-bs-toggle', 'collapse');
      button.classList.add('collapsed'); 
    });

  } else {
    // Disable collapsing on larger screens
    accordionButtons.forEach(button => {
      button.removeAttribute('data-bs-toggle');
      button.classList.remove('collapsed'); // Remove "collapsed" class
    });

    // Add "show" class to all accordion items
    accordionItems.forEach(item => {
      item.classList.add('show');
    });
  }
}

// Initial call to set accordion behavior
updateAccordionBehavior();

// Event listener for window resize
window.addEventListener('resize', updateAccordionBehavior);
