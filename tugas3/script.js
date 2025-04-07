document.addEventListener("scroll", function () {
    const button = document.getElementById("button-up");
    const pxCount = document.getElementById("px-count")

    showAlert(`Ketinggian ${Math.round(window.scrollY)}px`, 250)
    // if(window.scrollY > 0) {
    //     pxCount.style.visibility = "visible"
    // } else { 
    //     pxCount.style.visibility = "hidden"
    // }
    // pxCount.textContent = `${Math.round(window.scrollY)}px`
    if (window.scrollY > 2000) {
        button.style.display = "block"; 
    } else {
        button.style.display = "none"; 
    }
});

document.getElementById('button-up').addEventListener('click', function() {
    window.scrollTo({
        top: 0, 
        behavior: 'smooth' 
    });
});

const showAlert = (message, duration) => {
    const alertBox = document.createElement('div');
    alertBox.textContent = message;
    alertBox.style.position = 'fixed';
    alertBox.style.top = '5px';
    alertBox.style.right = '5px';
    alertBox.style.padding = '10px 20px';
    alertBox.style.backgroundColor = '#ffcc00';
    alertBox.style.color = 'black';
    alertBox.style.border = '1px solid #000';
    alertBox.style.borderRadius = '5px';
    alertBox.style.boxShadow = '0 4px 6px rgba(0,0,0,0.2)';
    alertBox.style.zIndex = '1000';

    document.body.appendChild(alertBox);

    setTimeout(() => {
        alertBox.remove();
    }, duration);
}