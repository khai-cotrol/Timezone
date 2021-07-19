<div class="main-content">
    <h1>ung dung xem gio hien tai cua cac thanh pho tren the gioi</h1>
    <label for="select-city"></label>
    <select name="" id="select-city" >
        <option> Chon Thanh pho</option>
        <option value="America-Chihuahua" > Chihuahua, Mexico</option>
        <option value="America-Costa_Rica">costa Rica</option>
        <option value="America-havana">La habana, Cuba </option>
        <option value="Asia-Hong_Kong">Hong Kong</option>
        <option value="Asia-Ho_Chi_Minh">Ho Chi Minh, Viet Nam</option>
    </select>
</div>

<script>
    document.getElementById("select-city").onchange =function (){
        window.location.href = document.getElementById("select-city").value;
    }
</script>
