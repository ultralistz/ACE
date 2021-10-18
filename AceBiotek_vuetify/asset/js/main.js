/*=============== 顯示 MENU ===============*/
const showMenu = (toggleId, navId) =>
{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)
    
    //驗證 toggle 與 nav 是否存在
    if(toggle && nav)
    {
        toggle.addEventListener('click', ()=>
        {
            // 將 show-menu class 新增至 nav__menu 的 div tag
            nav.classList.toggle('show-menu')
        })
    }
}
showMenu('nav-toggle','nav-menu')


/*=============== 移除 MENU (小螢幕) ===============*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction()
{
    const navMenu = document.getElementById('nav-menu')
    //若點選 NAV 連結，則隱藏 MENU
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))


/*=============== 回到最上方按鈕 ===============*/
const sections = document.querySelectorAll('section[id]')

function scrollActive()
{
    const scrollY = window.pageYOffset

    sections.forEach(current =>
        {
        const sectionHeight = current.offsetHeight,
              sectionTop = current.offsetTop - 50,
              sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight)
        {
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
        }
        else
        {
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)


/*=============== 回到最上方按鈕顯示與否 ===============*/
function scrollHeader()
{
    const nav = document.getElementById('header')
    // When the scroll is greater than 80 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 80) nav.classList.add('scroll-header'); else nav.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)


/*=============== 回到最上方按鈕 ===============*/
function scrollUp(){
    const scrollUp = document.getElementById('scroll-up');
    // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
    if(this.scrollY >= 560) scrollUp.classList.add('show-scroll'); else scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)


// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')