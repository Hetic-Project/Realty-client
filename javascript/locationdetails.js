import * as THREE from 'three'
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';

function create3dView (apartment_id)
{
    fetch(`http://localhost:4000/apartment/get/oneApartment/${apartment_id}`)
      .then(response => {
        // Vérifier si la requête a réussi (code de statut HTTP 200-299)
        if (response.ok) {
    
            // Canvas
            const canvas = document.querySelector('canvas.webgl')
    
            // Scene
            const scene = new THREE.Scene()
            scene.background = new THREE.Color(0xff0000)
    
            const textureLoader = new THREE.TextureLoader();
    
            const url = [
                response.json()
            ];
            
            const envMap = new THREE.CubeTextureLoader().load(url);
            scene.background = cubeTexture;
    
            const material = new THREE.MeshStandardMaterial({ envMap: cubeTexture });
    
            /**
             * Sizes
             */
            const sizes = {
                width: 800,
                height: 600
            }
    
            window.addEventListener('resize', () =>
            {
                // Update camera
                camera.aspect = sizes.width / sizes.height
                camera.updateProjectionMatrix()
    
                // Update renderer
                renderer.setSize(sizes.width, sizes.height)
                renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
            })
    
            /**
             * Camera
             */
            // Base camera
            const camera = new THREE.PerspectiveCamera(75, sizes.width / sizes.height, 0.1, 100)
            camera.position.set(0,0,0)
            scene.add(camera)
    
            // Controls
            const controls = new OrbitControls(camera, canvas)
            controls.enableDamping = true
    
            /**
             * Renderer
             */
            const renderer = new THREE.WebGLRenderer({
                canvas: canvas
            })
            renderer.setSize(sizes.width, sizes.height)
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
    
            /**
             * Animate
             */
            const clock = new THREE.Clock()
    
            const tick = () =>
            {
                const elapsedTime = clock.getElapsedTime()
    
                controls.update()
    
                // Render
                renderer.render(scene, camera)
    
                window.requestAnimationFrame(tick)
            }
    
            tick()
        } else {
          // Renvoie une promesse rejetée avec un message d'erreur
          throw new Error('Erreur lors de la requête. Code de statut : ' + response.status);
        }
      })
      .then(data => {
        // Les données JSON récupérées sont disponibles ici
        console.log(data);
      })
      .catch(error => {
        // Gestion des erreurs
        console.error(error);
      });
}
const apartement_id = document.querySelector('#apartment_id').value;
console.log(apartement_id);
create3dView(apartement_id);