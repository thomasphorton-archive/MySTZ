function track(e,t,n){_gaq.push(["_trackEvent",e,t,n]);console.log("tracking",e,t,n)}$(function(){productLink=$(".product-individual-link");productLink.click(function(){source=$(this).data("linkType");product=$(this).data("productTitle");track("Viewed Product",source,product)})});