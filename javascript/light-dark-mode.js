const toggleSwitch = document.querySelector('.switch input[type="checkbox"]');

if (currentTheme) {
    document.documentElement.setAttribute('data-theme', currentTheme);
  
    if (currentTheme === 'dark') {
        toggleSwitch.checked = true;
    }
}

function switchTheme(e) {
    if (e.target.checked) {
        //document.documentElement.setAttribute('data-theme', 'dark');
        alert("dark");
    }
    else {
        //document.documentElement.setAttribute('data-theme', 'light');
        alert("Light");
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);