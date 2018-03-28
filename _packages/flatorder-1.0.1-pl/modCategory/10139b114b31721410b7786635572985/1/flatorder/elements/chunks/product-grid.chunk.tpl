<div class="flatorder">
<div class="container">
    <div class="cards" data-bind="foreach: products">
        <figure class="card-3">
            <img data-bind="attr: { src: img, alt: name }">
            <figcaption>
                <strong data-bind="text: name"></strong>
                <p data-bind="text: desc"></p>
                <h2><small data-bind="visible: option()[1]">Starting at:</small> $<span data-bind="text: price"></span></h2>
                <label data-bind="text: optname,visible: option()[1]"></label>
                <select data-bind='
                    visible: option()[1],
                    options: option(),
                    optionsCaption: "Select...",
                    value: option(),
                    selectedOptions: chosenOptions,
                    event:{change: $parent.updatePrice}
                    '></select>
                <select data-bind='
                    visible: option2()[0],
                    options: option2(),
                    optionsCaption: "Select...",
                    value: option2(),
                    selectedOptions: chosenOptions2,
                    event:{change: $parent.updatePrice2}
                    '></select>
                <input type="number" min="1" placeholder="1" data-bind='value: quantity, valueUpdate: "afterkeydown"' />
                <button class="btn" data-bind="click: $parent.addToCart">ADD TO CART</button>
            </figcaption>
        </figure>
    </div>
</div>
</div>
