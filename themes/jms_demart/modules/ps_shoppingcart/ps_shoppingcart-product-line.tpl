<div class="d-flex align-items-center">
	{if $product.cover.bySize.cart_default.url}
		<a class="cart-product-image layout-column" href="{$product.url}" title="{$product.name|escape:'html':'UTF-8'}">
			<img alt="{$product.name|escape:'html':'UTF-8'}" src="{$product.cover.bySize.cart_default.url}" class="preview img-responsive" data-full-size-image-url = "{$product.cover.large.url}">
		</a>
	{/if}
	<div class="product-info layout-column">
		<a class="product-link" href="" title="{$product.name|escape:'html':'UTF-8'}">
			{$product.name}
		</a>
		<div class="content_price">
			<span class="price new">{$product.price}</span>
		</div>
		<div class="line">
			<span>x</span>
			<span class="quantity">{$product.quantity}</span>
			<a class="remove-from-cart remove_link" rel="nofollow" href="{$product.remove_from_cart_url}" data-link-action="remove-from-cart" title="{l s='Remove from cart' d='Shop.Theme.Actions'}" >
				<i class="lnr lnr-trash"></i>
			</a>
		</div>
	</div>
</div>
