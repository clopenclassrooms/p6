function addIframe(embedTag, elementId,buttonModify,input)
{
    console.log("embedTag");
    console.log(embedTag);
    console.log("elementId");
    console.log(elementId);
    console.log("buttonModify");
    console.log(buttonModify);
    console.log("input");
    console.log(input);
    var div = document.createElement('div');
    
    div.innerHTML = embedTag;
    var iframe = div.getElementsByTagName('iframe')[0];
    console.log(iframe);
    iframe.setAttribute("allow","accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture");
    iframe.setAttribute("id","video" + elementId);
    iframe.setAttribute("width","100%");
    iframe.setAttribute("height","100%");
    iframe.setAttribute("allowfullscreen","");
    iframe.setAttribute("frameborder","0");

    iframe.removeAttribute("style");
    console.log(iframe.getAttribute("src",""));

    buttonModify.closest('.videoMiniBox').querySelector('.trickMiniBoxVideo').innerHTML = "";
    input.value = iframe.outerHTML;
    buttonModify.closest('.videoMiniBox').querySelector('.trickMiniBoxVideo').innerHTML = iframe.outerHTML;

}