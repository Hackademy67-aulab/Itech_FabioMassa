const cursor = document.querySelector(".cursor")
const pointer = document.querySelector(".pointer")
const link = document.querySelectorAll("a");


document.addEventListener('mousemove', (e) => {
    cursor.style.left = e.pageX + 'px';
    cursor.style.top = e.pageY + 'px';
    pointer.style.left = e.pageX + 'px';
    pointer.style.top = e.pageY + 'px';
})

link.forEach(link => {
    link.addEventListener('mouseover', () => {
        cursor.classList.add('hover');
    })
    link.addEventListener('mouseleave', () => {
        cursor.classList.remove('hover');
    })
});
