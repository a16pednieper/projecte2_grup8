var datos = [];

            document.getElementById("consulta").addEventListener("click", function(){
                let valor=document.getElementById("categoria").value;
                console.log(valor)
                // console.log("hago la llamada a axios")
                // AXIOS para entrar en Localhost
                // axios.get('http://localhost/projecte2_grup8/mostrarExperiencias.php', {
                //     params: {
                //         cat: valor
                //     }
                // })     
                // AXIOS para entrar en LABS
                axios.get('http://labs.iam.cat/~a16pednieper/projecte2_grup8/mostrarExperiencias.php',{
                    params: {
                        cat: valor
                }
                })     
            .then( response =>  {   
               
                
                
                datos=response.data
                console.log(datos);
                

                var llargada = datos.length;

                console.log(llargada);

                var htmlStr="";
                for (let index = 0; index < llargada; index++) {
                    const element = datos[index];
                    console.log(index);

                  //  htmlStr += `<h3> Desc ${datos[index].Descripcio}  </h3>`;
                  htmlStr += `<ul class="cards clearfix">
                        <li>
                        <figure class="product-card">
                        <a href="#">
                           <img src='${datos[index].imatge}'></img>
                             <figcaption>
                            <h5 class="product-card-title">${datos[index].titol}</h5>
                                         <p>${datos[index].descripcio}</p>
                                         <p class="product-card-address">
                                         ${datos[index].fecha}
                                         </p>
                                         <div class="product-card-price">
                                             <span class="price-savings">${datos[index].coordenadas}</span>
                                             <p class="amount-price">${datos[index].likes} Likes</p>
                                             <p class="amount-price">${datos[index].dislikes} Dislikes</p>
                                         </div>
                                         </figcaption>
                                     </a>
                                     </figure>
                                 </li>
                             </ul>`;
                }

                document.getElementById("experiencies").innerHTML=htmlStr;

                // var htmlStr = "";                
                // 
                //     <p> Imatge ${datos[index].imatge}  </p>
                //     <p> Coordenadas ${datos[index].coordenadas}  </p>
                //     <p> Likes ${datos[index].likes}  </p>
                //     <p> DisLikes ${datos[index].dislikes}  </p>
                //     <p> Data ${datos[index].fecha}  </p>
                //     for (var index = 0; index < llargada; index++) {
                //         const element = response[index];                    
                                
               


                // document.getElementById("experiencies").innerHTML=htmlStr;
            
                
                })
                .catch(function () {
                    console.log("Ha salido del principal");
                })
                .then (function () {
                    //always executed
                });
            });