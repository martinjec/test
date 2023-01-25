<div>
    <div id="msg" class="msg"></div>
    <div id="empty_msg"></div>

    <div class="input">
        <form id="product_form" action="../AddItem/addItem/" method='POST'>
            <input id="submit" type="submit" value="Save">
            <input id="cancel" type="submit" value="Cancel" formaction='../../' formnovalidate>
    </div>
    <div .class="form">
        <label for="sku">SKU</label>
        <input id="sku" type="text" name="sku" required>
        <label for="Name">Name</label>
        <input id="name" type="text" name="name" required>
        <label for="price">Price</label>
        <input id="price" type="text" name="price" required>
        <label for="select">Type Switcher</label>
        <select required id="productType" name='selector'>
            <option value="" selected disabled>Choose Type</option>
            <option value="DVD">DVD</option>
            <option value="Book">Book</option>
            <option value="Furniture">Furniture</option>
        </select>
        <div id="DVD" hidden>
            <label for="size">Please, provide size</label>
            <input type="text" id="size" name="size">
        </div>
        <div id="Book" hidden>
            <label for="weight">Please, provide weight</label>
            <input type="text" id="weight" name="weight">
        </div>
        <div id="Furniture" hidden>
            <div>Please, provide dimensions</div>
            <label for="height">Height</label>
            <input type="text" id="height" name="height">
            
            <label for="width">Width</label>
            <input type="text" id="width" name="width">
            
            <label for="length">Lenght</label>
            <input type="text" id="length" name="length">
        </div>
    </div>