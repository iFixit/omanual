
<p>
The package manifest is an XML description of the oManual package contents.
This includes the list of guides and a list
of attached documents in the /media folder of the .omanual package.
</p>
<p>
Note: This is not a complete listing of package contents since each subfile
may additionally reference its own media.
</p>

<div class="legend">
  <div class="req"><span class="box"></span> required</div>
  <div class="opt"><span class="box"></span> optional</div>
</div> 

<div class="tagListing" id="manifest">
  <div class="tag req">
     <h4><a href="#manifest">manifest</a></h4>
     <p class="desc">
     The root of an oManual manifest.
     </p>
     <div>
        <ul class="attr">
           <li class="attr-intro">Attributes:</li>
           <li><strong class="req">locale</strong> - <em>required</em> The language the package is written in.</li>
        </ul>
     </div>
  </div>

  <div class="subtag" id="manifest-1">
     <div class="tag req" id="title-3">
        <h4><a href="#title-3">title</a></h4>
        <p class="desc">
        Contains the title of the oManual package.
        </p>
        <div>
           <ul class="attr">
              <li class="attr-intro">Attributes: None</li>
           </ul>
        </div>
     </div>

     <div class="tag" id="description-1">
        <h4><a href="#description-1">description</a></h4>
        <p class="desc">
        A brief, simple HTML formatted description of the manual.
        </p>
        <div>
           <ul class="attr">
              <li class="attr-intro">Attributes: None</li>
           </ul>
        </div>
     </div>

     <div class="tag req" id="guides">
        <h4><a href="#guides">guides</a></h4>
        <p class="desc">
        List of guides within the oManual package.
        </p>
        <div>
           <ul class="attr">
              <li class="attr-intro">Attributes: None</li>
           </ul>
        </div>
     </div>

     <div class="subtag" id="guide-1">
        <div class="tag">
           <h4><a href="#guide-1">guide </a></h4>
           <p class="desc">
           Individual guide element.  A short description of the guide that's contained within the oManual package.  The corresponding file in the package has the filename <i>guide-{id}.xml</i>. 
           </p>
           <div>
              <ul class="attr">
                 <li class="attr-intro">Attributes:</li>
                 <li><strong>id</strong> - <em>required</em> An integer identifier for the guide.</li>
                 <li><strong>subject</strong> - <em>required</em> The subcomponent the guide will be operating on.</li>
                 <li><strong>type</strong> - <em>required</em> The type of guide to perform. Suggested options: installation, maintenance, repair, disassembly, technique.</li>
              </ul>
           </div>
        </div>

        <div class="subtag" id="title-2">
           <div class="tag">
              <h4><a href="#title-2">title </a></h4>
              <p class="desc">
              The title of the guide.
              </p>
              <div>
                 <ul class="attr">
                    <li class="attr-intro">Attributes: None</li>
                 </ul>
              </div>
           </div>

           <div class="tag req" id="path">
              <h4><a href="#path">path </a></h4>
              <p class="desc">
              Path to the guide&#39;s XML file.
              </p>
              <div>
                 <ul class="attr">
                    <li class="attr-intro">Attributes: None</li>
                 </ul>
              </div>
           </div>

           <div class="tag" id="url">
              <h4><a href="#url">url </a></h4>
              <p class="desc">
              URL to the canonical online source for this guide.
              </p>
              <div>
                 <ul class="attr">
                    <li class="attr-intro">Attributes: None</li>
                 </ul>
              </div>
           </div>

           <div class="tag" id="thumbnail">
              <h4><a href="#thumbnail">thumbnail </a></h4>
              <p class="desc">
              Path to the guides thumbnail image.
              </p>
              <div>
                 <ul class="attr">
                    <li class="attr-intro">Attributes: None</li>
                 </ul>
              </div>
           </div>

           <div class="tag" id="image_url">
              <h4><a href="#image_url">image_url</a></h4>
              <p class="desc">
              Path to the full size main guide image.
              </p>
              <div>
                 <ul class="attr">
                    <li class="attr-intro">Attributes: None</li>
                 </ul>
              </div>
           </div>
        </div>
     </div>

     <div class="tag req" id="documents-1">
        <h4><a href="#documents-1">documents </a></h4>
        <p class="desc">
        </p>
        <div>
           <ul class="attr">
              <li class="attr-intro">Attributes: None</li>
           </ul>
        </div>
     </div>

     <div class="subtag" id="document-1">
        <div class="tag">
           <h4><a href="#document-1">document </a></h4>
           <p class="desc">
           A document included in the package. The text for this element should be the absolute path to the document.
           </p>
           <div>
              <ul class="attr">
                 <li class="attr-intro">Attributes:</li>
                 <li><strong>id</strong> - <em>optional</em> Integer identifier for the document.</li>
                 <li><strong class="req">type</strong> - <em>required</em> Type must be 'category' if the file is an oManual category. Otherwise, specify the MIME type of the file.</li>
              </ul>
           </div>
        </div>
     </div>
  </div>
</div>
