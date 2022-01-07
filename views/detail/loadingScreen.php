<div class="fixed-top" style="height: 200vh; width:420vh; filter: blur(50px);"></div>
<div class="col-12 fixed-top container d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card text-center p-5 w-auto">
        <h1 id="loading_title">Loading</h1>
        <hr>
        <div class="d-flex justify-content-around">
            <div class="spinner-grow text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-warning" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-grow text-success" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        <hr>
        <h3 id="loading_content">
            กำลังโหลดข้อมูลหน้าเว็บไซต์ครับ/ค่ะ
        </h3>
        <button class="btn btn-danger mt-3" onclick="window.stop(); pageLoaded('cancel');" >Cancel</button>
    </div>
</div>