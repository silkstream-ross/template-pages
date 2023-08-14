(function(C){

    // INITIALISE
    C.instances.global      = new C.constructors.Global();

    // on almost all pages
    C.instances.header      = new C.constructors.Header();

    // specific pages
    C.instances.home        = new C.constructors.Home();
})(Controller);