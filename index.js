// Axis
fetch("https://api.mfapi.in/mf/125354")
  .then((res) => {
    return res.json();
  })
  .then((data) => {
    document.getElementById("axis-nav-value").innerHTML = 'Initial : ' + data.data[2284].nav + '<br>'+ ' Current: ' + data.data[0].nav

    const axisReturn1 =
      ((data.data[0].nav - data.data[2284].nav) / data.data[2284].nav) * 100;
    
    oneYearReturn = Math.pow(1 + axisReturn1, 365 / 365) - 1;
  
    document.getElementById("axis-1yr").innerHTML =
      oneYearReturn.toPrecision(5) + " %";

    const axisReturn3 = Math.pow(data.data[0].nav / data.data[2284].nav, 1 / 3);
    threeYearReturn = (axisReturn3 - 1) * 100;
    document.getElementById("axis-3yr").innerHTML = threeYearReturn.toPrecision(5) + " %";

    const axisReturn5 =
      Math.pow(data.data[0].nav / data.data[2284].nav, 1 / 5) - 1;
    fiveYearRetrun = axisReturn5 * 100;
    document.getElementById("axis-5yr").innerHTML =
      fiveYearRetrun.toPrecision(5) + " %";
    });
    
    // Tata
    fetch("https://api.mfapi.in/mf/100416")
    .then((res) => {
        return res.json();
    })
    .then((data) => {

      document.getElementById("tata-nav-value").innerHTML = 'Initial: ' + data.data[2789].nav + '<br>' +'Current: ' + data.data[0].nav
        const tataReturn =
      Math.pow(data.data[0].nav / data.data[2789].nav, 1 / 5) - 1;
      oneYearRetrun = tataReturn * 100;
      document.getElementById("tata-1yr").innerHTML =
      oneYearRetrun.toPrecision(5) + " %";
      
      const tataReturn3 = Math.pow(data.data[0].nav / data.data[2789].nav, 1 / 3);
      threeYearReturn = (tataReturn3 - 1) * 100;
      document.getElementById("tata-3yr").innerHTML = threeYearReturn.toPrecision(5) + " %";
  
      const tataReturn5 =
        Math.pow(data.data[0].nav / data.data[2789].nav, 1 / 5) - 1;
      fiveYearRetrun = tataReturn5 * 100;
      document.getElementById("tata-5yr").innerHTML =
        fiveYearRetrun.toPrecision(5) + " %";

  });
  
  //   HDFC
  
  fetch("https://api.mfapi.in/mf/102145")
  .then((res) => {
      return res.json();
  })
  .then((data) => {

    document.getElementById("hdfc-nav-value").innerHTML = 'Initial: ' + data.data[2941].nav + '<br>' +'Current: ' + data.data[0].nav

      const hdfcReturn = Math.pow( data.data[0].nav / data.data[2941].nav , 1 / 5) - 1;
    oneYearRetrun = hdfcReturn * 100;
    document.getElementById("hdfc-1yr").innerHTML =
    oneYearRetrun.toPrecision(5) + " %";
    
    const hdfcReturn3 = Math.pow(data.data[0].nav / data.data[2941].nav, 1 / 3);
    threeYearReturn = (hdfcReturn3 - 1) * 100;
    document.getElementById("hdfc-3yr").innerHTML = threeYearReturn.toPrecision(5) + " %";

    const hdfcReturn5 =
      Math.pow(data.data[0].nav / data.data[2941].nav, 1 / 5) - 1;
    fiveYearRetrun = hdfcReturn5 * 100;
    document.getElementById("hdfc-5yr").innerHTML =
      fiveYearRetrun.toPrecision(5) + " %";

});

// L&T

fetch("https://api.mfapi.in/mf/119417")
.then((res) => {
    return res.json();
})
.then((data) => {

  document.getElementById("l_t-nav-value").innerHTML = 'Initial: ' + data.data[2434].nav + '<br>' +'Current: ' + data.data[0].nav

    const l_tReturn = Math.pow( data.data[0].nav / data.data[2434].nav , 1 / 5) - 1;
  oneYearRetrun = l_tReturn * 100;
  document.getElementById("landt-1yr").innerHTML =
  oneYearRetrun.toPrecision(5) + " %";
  
  const l_tReturn3 = Math.pow(data.data[0].nav / data.data[2434].nav, 1 / 3);
  threeYearReturn = (l_tReturn3 - 1) * 100;
  document.getElementById("landt-3yr").innerHTML = threeYearReturn.toPrecision(5) + " %";

  const l_tReturn5 =
    Math.pow(data.data[0].nav / data.data[2434].nav, 1 / 5) - 1;
  fiveYearRetrun = l_tReturn5 * 100;
  document.getElementById("landt-5yr").innerHTML =
    fiveYearRetrun.toPrecision(5) + " %";

});

// SBI

fetch("https://api.mfapi.in/mf/119827")
.then((res) => {
    return res.json();
})
.then((data) => {

  document.getElementById("sbi-nav-value").innerHTML = 'Initial: ' + data.data[2513].nav + '<br>' +'Current: ' + data.data[0].nav

    const sbiReturn = Math.pow( data.data[0].nav / data.data[2513].nav , 1 / 5) - 1;
  oneYearRetrun = sbiReturn * 100;
  document.getElementById("sbi-1yr").innerHTML =
  oneYearRetrun.toPrecision(5) + " %";
  
  const sbiReturn3 = Math.pow(data.data[0].nav / data.data[2513].nav, 1 / 3);
  threeYearReturn = (sbiReturn3 - 1) * 100;
  document.getElementById("sbi-3yr").innerHTML = threeYearReturn.toPrecision(5) + " %";

  const sbiReturn5 =
    Math.pow(data.data[0].nav / data.data[2513].nav, 1 / 5) - 1;
  fiveYearRetrun = sbiReturn5 * 100;
  document.getElementById("sbi-5yr").innerHTML =
    fiveYearRetrun.toPrecision(5) + " %";

});

// quant

fetch("https://api.mfapi.in/mf/100172")
.then((res) => {
    return res.json();
})
.then((data) => {

  document.getElementById("quant-nav-value").innerHTML = 'Initial: ' + data.data[3655].nav + '<br>' +'Current: ' + data.data[0].nav

    const quantReturn = Math.pow( data.data[0].nav / data.data[3655].nav , 1 / 5) - 1;
  oneYearRetrun = quantReturn * 100;
  document.getElementById("quant-1yr").innerHTML =
  oneYearRetrun.toPrecision(5) + " %";
  
  const quantReturn3 = Math.pow(data.data[0].nav / data.data[3655].nav, 1 / 3);
  threeYearReturn = (quantReturn3 - 1) * 100;
  document.getElementById("quant-3yr").innerHTML = threeYearReturn.toPrecision(5) + " %";

  const quantReturn5 =
    Math.pow(data.data[0].nav / data.data[3655].nav, 1 / 5) - 1;
  fiveYearRetrun = quantReturn5 * 100;
  document.getElementById("quant-5yr").innerHTML =
    fiveYearRetrun.toPrecision(5) + " %";

});

// LIC

fetch("https://api.mfapi.in/mf/101202")
.then((res) => {
    return res.json();
})
.then((data) => {

  document.getElementById("lic-nav-value").innerHTML = 'Initial: ' + data.data[2261].nav + '<br>' +'Current: ' + data.data[0].nav

    const licReturn = Math.pow( data.data[0].nav / data.data[2261].nav , 1 / 5) - 1;
  oneYearRetrun = licReturn * 100;
  document.getElementById("lic-1yr").innerHTML =
  oneYearRetrun.toPrecision(5) + " %";
  
  const licReturn3 = Math.pow(data.data[0].nav / data.data[2261].nav, 1 / 3);
  threeYearReturn = (licReturn3 - 1) * 100;
  document.getElementById("lic-3yr").innerHTML = threeYearReturn.toPrecision(5) + " %";

  const licReturn5 =
    Math.pow(data.data[0].nav / data.data[2261].nav, 1 / 5) - 1;
  fiveYearRetrun = licReturn5 * 100;
  document.getElementById("lic-5yr").innerHTML =
    fiveYearRetrun.toPrecision(5) + " %";

});

// IDFC

fetch("https://api.mfapi.in/mf/118421")
.then((res) => {
    return res.json();
})
.then((data) => {

  document.getElementById("idfc-nav-value").innerHTML = 'Initial: ' + data.data[2513].nav + '<br>' +'Current: ' + data.data[0].nav

    const idfcReturn = Math.pow( data.data[0].nav / data.data[2513].nav , 1 / 5) - 1;
  oneYearRetrun = idfcReturn * 100;
  document.getElementById("idfc-1yr").innerHTML =
  oneYearRetrun.toPrecision(5) + " %";
  
  const idfcReturn3 = Math.pow(data.data[0].nav / data.data[2513].nav, 1 / 3);
  threeYearReturn = (idfcReturn3 - 1) * 100;
  document.getElementById("idfc-3yr").innerHTML = threeYearReturn.toPrecision(5) + " %";

  const idfcReturn5 =
    Math.pow(data.data[0].nav / data.data[2513].nav, 1 / 5) - 1;
  fiveYearRetrun = idfcReturn5 * 100;
  document.getElementById("idfc-5yr").innerHTML =
    fiveYearRetrun.toPrecision(5) + " %";

});

// Taurus
fetch("https://api.mfapi.in/mf/118881")
.then((res) => {
    return res.json();
})
.then((data) => {

  document.getElementById("taurus-nav-value").innerHTML = 'Initial: ' + data.data[2516].nav + '<br>' +'Current: ' + data.data[0].nav

    const taurusReturn = Math.pow( data.data[0].nav / data.data[2516].nav , 1 / 5) - 1;
  oneYearRetrun = taurusReturn * 100;
  document.getElementById("taurus-1yr").innerHTML =
  oneYearRetrun.toPrecision(5) + " %";
  
  const taurusReturn3 = Math.pow(data.data[0].nav / data.data[2516].nav, 1 / 3);
  threeYearReturn = (taurusReturn3 - 1) * 100;
  document.getElementById("taurus-3yr").innerHTML = threeYearReturn.toPrecision(5) + " %";

  const taurusReturn5 =
    Math.pow(data.data[0].nav / data.data[2516].nav, 1 / 5) - 1;
  fiveYearRetrun = taurusReturn5 * 100;
  document.getElementById("taurus-5yr").innerHTML =
    fiveYearRetrun.toPrecision(5) + " %";

});