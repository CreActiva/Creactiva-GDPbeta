$(document).ready(function() {
    ContD = '<?php echo $ContD; ?>';
    parseInt(ContD);
    pdf = new jsPDF('portrait, mm, a4');
    if (ContD <= 8) {
        pdf.addHTML($('.container'),function(){
            pdf.addPage();
            pdf.addHTML($('.info'), function(){
                pdf.addPage();
                pdf.addHTML($('.TC1'), function(){
                    pdf.addPage();
                    pdf.addHTML($('.TC2'),function(){
                        pdf.addPage();
                        pdf.addHTML($('.TC3'),function(){
                            pdf.addPage();
                            pdf.addHTML($('.TC4'),function(){
                                pdf.save('x.pdf');
                            });
                        });
                    });
                });

            });
        });
    }
    else if (ContD > 8 && ContD <= 16) {
        pdf.addHTML($('.container'),function() {
           pdf.addPage();
           pdf.addHTML($('.container1'),function(){
            pdf.addPage();
            pdf.addHTML($('.TC1'), function(){
                pdf.addPage();
                pdf.addHTML($('.TC2'),function(){
                    pdf.addPage();
                    pdf.addHTML($('.TC3'),function(){
                        pdf.addPage();
                        pdf.addHTML($('.TC4'),function(){
                            pdf.save('x.pdf');
                        });
                    });
                });
            });

           });
        });
    } else if (ContD > 16 && ContD <= 24){
        pdf.addHTML($('.container'),function(){
            pdf.addPage();
            pdf.addHTML($('.container1'),function() {
                pdf.addPage();
                pdf.addHTML($('.container2'),function(){
                    pdf.addPage();
                    pdf.addHTML($('.TC1'), function(){
                        pdf.addPage();
                        pdf.addHTML($('.TC2'),function(){
                            pdf.addPage();
                            pdf.addHTML($('.TC3'),function(){
                                pdf.addPage();
                                pdf.addHTML($('.TC4'),function(){
                                    pdf.save('x.pdf');
                                });
                            });
                        });
                    });
                });
            });
        });
    } else if (ContD > 24 && ContD <= 32){
        pdf.addHTML($('.container'),function(){
            pdf.addPage();
            pdf.addHTML($('.container1'),function(){
                pdf.addPage();
                pdf.addHTML($('.container2'),function(){
                    pdf.addPage();
                    pdf.addHTML($('.container3'),function(){
                        pdf.addPage();
                        pdf.addHTML($('.TC1'), function(){
                            pdf.addPage();
                            pdf.addHTML($('.TC2'),function(){
                                pdf.addPage();
                                pdf.addHTML($('.TC3'),function(){
                                    pdf.addPage();
                                    pdf.addHTML($('.TC4'),function(){
                                        pdf.save('x.pdf');
                                    });
                                });
                            });
                        });
                    });
                });
            });
        });
    } else {
        alert('Sin datos encontrados');
    }
});