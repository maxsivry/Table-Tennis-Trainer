var submit = $("#submit.button")

submit.click(function() {
    var bNum = document.getElementById("ballCount").value;
    var intervalNum = document.getElementById("interval").value;
    sendValues(bNum, intervalNum);
});

function sendValues(t, i) {
    var ballCount = t.value;
    var intervalNum = i.value;
    $.ajax({
      url: "/button",
      type: "POST",
      data: {"ballCount": ballCount, "intervalNum": intervalNum},
      success: function(response) {
        console.log("Sent to motor");
      },
      error: function(xhr) {
        console.log("Error processing button click");
      }
    });
  }

