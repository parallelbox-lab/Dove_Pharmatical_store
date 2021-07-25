var options = {
    bottom: '64px', // default: '32px'
    right:'unset',
    left: '32px', // default: 'unset'
    time: '0.2s', // default: '0.3s'
    mixColor: '#fff', // default: '#fff'
    backgroundColor: '#fff',  // default: '#fff'
    color:'#fff',
    buttonColorDark: '#100f2c',  // default: '#100f2c'
    buttonColorLight: '#fff', // default: '#fff'
    saveInCookies: true, // default: true,
    label: '🌓', // default: ''
  }
  
  const darkmode = new Darkmode(options);
  darkmode.showWidget();