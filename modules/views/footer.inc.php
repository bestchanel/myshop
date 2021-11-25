<script>

function loadUrl() {
    let ele = document.getElementById("product_image").value;
    let target = document.getElementById("loadImg")

    target.src = ele;

}

function add_product() {
        let product_name = document.getElementById('product_name').value
        let product_detail = document.getElementById('product_detail').value
        let product_price = document.getElementById('product_price').value
        let product_group = document.getElementById('product_group').value
        let product_brand = document.getElementById('product_brand').value
        let product_image = document.getElementById('product_image').value
        let promotion = document.getElementById('promotion').checked

        console.log(product_name);
        console.log(product_detail);
        console.log(product_price);
        console.log(product_group);
        console.log(product_brand);
        console.log(product_image);
        console.log(promotion);

        if (product_name && product_detail && product_group && product_price && product_brand) {
            fetch('models/ProductModel.php',{
                method: 'post',
                body: JSON.stringify({
                    action:'add_product',
                    product_name: product_name,
                    product_detail: product_detail,
                    product_price: product_price,
                    product_group: product_group,
                    product_brand: product_brand,
                    product_image: product_image,
                    promotion: promotion,
                    })
                })
                .then((response) => response.json())
                .then((data) => {
                    if(data){
                        if(product_image){
                            console.log('อัปโหลดสินค้าสำเร็จ!');
                            window.location.href = "?app=product";
                        }else{
                            upload_image(sample_image.files[0]);
                        }
                    }else{
                        alert("ขออภัยเกิดข้อผิดพลาดระหว่างทำการ")
                    }
                    console.log(data);
            })
        }else{
            alert("กรุณากรอกข้อมูลให้ครบ!")
        }
    }



const sample_image = document.getElementsByName('sample_image')[0];

const upload_image = (file) => {

// check file type

if(!['image/jpeg', 'image/png'].includes(file.type))
{
    alert('Only .jpg and .png image are allowed');

    document.getElementsByName('sample_image')[0].value = '';
    
    return;
}

// check file size (< 2MB)
if(file.size > 2 * 1024 * 1024)
    {
        alert('File must be less than 2 MB');

        document.getElementsByName('sample_image')[0].value = '';
        return;
    }

    const form_data = new FormData();

    form_data.append('sample_image', file);

    fetch("models/upload.php", {
        method:"POST",
        body : form_data
    }).then(function(response){
        return response.json();
    }).then(function(responseData){

        console.log('อัปโหลดสินค้าสำเร็จ!');
        window.location.href = "?app=product";
        // document.getElementsByName('sample_image')[0].value = '';

    });

    
}

</script>
