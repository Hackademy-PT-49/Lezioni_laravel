<x-layout>
    <div>
        <ul id="item-list">

        </ul>
    </div>

    <script> const list = document.getElementById('item-list')
        fetch('/api/v1/test').then(response=>response.json()).then(elements=>{
            for(let item of elements.data){
                list.innerHTML += `<li>${item.title}</li>`
            }
        })
    
    
    </script>
    
</x-layout>
