const categoryLinks = document.querySelectorAll('.browse-course-category li');
const categoryCourses = document.querySelectorAll('.browse-course-details');
const functionCourse = document.querySelectorAll('.upper-function li');
const homeLink = functionCourse[0];
const browseCourseLink = functionCourse[1];

function handleScroll() {
const browseCourseSection = document.getElementById('course');
const rect = browseCourseSection.getBoundingClientRect();
if (rect.top > 0) {
    functionCourse.forEach(link => link.classList.remove('upper-function-active'));
    homeLink.classList.add('upper-function-active');
} else {
    homeLink.classList.remove('upper-function-active');
    browseCourseLink.classList.add('upper-function-active');
}
}
function openView(){
const shoppingCart = document.querySelector('.shopping-cart');
const blurOverlay = document.querySelector('.blur-overlay');
shoppingCart.style.display = 'flex';
blurOverlay.style.display = 'block';
}
function closeView(){
const shoppingCart = document.querySelector('.shopping-cart');
const blurOverlay = document.querySelector('.blur-overlay');
shoppingCart.style.display = 'none';
blurOverlay.style.display = 'none';
}
function openSupport() {
    const support = document.querySelector('.contact-info');
    support.style.display = 'flex';
}