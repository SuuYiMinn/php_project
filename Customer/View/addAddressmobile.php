<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../dist/output.css" rel="stylesheet" />
  <title>Add Address</title>
</head>

<body>
  <!-- nav -->
  <nav class="w-full h-[100px] bg-[#FFB355]"></nav>

  <!-- body -->
  <section class="flex flex-col items-center justify-around my-10">
    <p class="font-medium text-[24px] text-[#F86F03]">Add Shiping Address</p>
    <br />
    <div>
      <p class="text-[18px] font-thin opacity-[0.5]">Full Name</p>
      <input class="w-[325px] h-[50px] rounded-[10px] border-[2px] text-[32px]" type="text" />
    </div>
    <br />
    <div>
      <p class="text-[18px] font-thin opacity-[0.5]">Address</p>
      <input class="w-[325px] h-[50px] rounded-[10px] border-[2px] text-[32px]" type="text" />
    </div>
    <br />
    <div>
      <p class="text-[18px] font-thin opacity-[0.5]">Region</p>
      <input class="w-[325px] h-[50px] rounded-[10px] border-[2px] text-[32px]" type="text" />
    </div>
    <br />
    <div>
      <p class="text-[18px] opacity-[0.5]">City</p>
      <input class="w-[325px] h-[50px] rounded-[10px] border-[2px] text-[32px]" type="text" />
    </div>
    <br />
    <div>
      <p class="text-[18px] opacity-[0.5]">Phone number</p>
      <input class="w-[325px] h-[50px] rounded-[10px] border-[2px] text-[32px]" type="text" />
    </div>
    <br />
    <div>
      <button class="w-[145px] h-[45px] bg-[#263A29] rounded-[10px]">
        <p class="text-white text-[20px]">Cancel</p>
      </button>
      <button class="w-[145px] h-[45px] bg-[#F86F03] rounded-[10px] ml-10">
        <p class="text-white text-[20px]">Safe</p>
      </button>
    </div>
  </section>

  <?php include "../View/common/commonFooter.php" ?>
</body>

</html>