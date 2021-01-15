<div class="modal" id="afegirexp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Experiencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="crearExp.php" method="post"  class="form-experiencia">
              <input id="titol" name="titol" type="text" required="" autofocus="" placeholder="Titol Experiencia">
              <br>
              <input type="date" id="data" name="fecha" required="" autofocus="" placeholder="Data">        
              <br>    
              <textarea type="text" name="text" rows="4" id="inputText" class="form-control" placeholder="Text" required=""></textarea>
              <br>
              <select name="cat" id="categoria">
              <option value="1">Aventures</option>
              <option value="2">Muntanya</option>
              <option value="3">Familiar</option>                                   
              </select>            
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar </button>
                  <button type="submit" class="btn btn-primary">Afegir Experiencia</button>
              </div>


        </form>
      </div>
      
    </div>
  </div>
</div>
        

       
            
        
    
    


