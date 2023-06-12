import * as THREE from 'three'
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';

function create3dView (apartment_id)
{
    fetch(`http://localhost:4000/apartment/get/oneApartment/${apartment_id}`)
      .then(response => {
        // Vérifier si la requête a réussi (code de statut HTTP 200-299)
        if (response.ok) {
          return response.json()
        } else {
          // Renvoie une promesse rejetée avec un message d'erreur
          throw new Error('Erreur lors de la requête. Code de statut : ' + response.status);
        }
      })
      .then(data => {
        
                // Canvas
                const canvas = document.querySelector('canvas.webgl')
                const cubeTextureLoader = new THREE.CubeTextureLoader();
        
                // Scene
                const scene = new THREE.Scene()
                scene.background = new THREE.Color(0xff0000)
        
                const envMap = cubeTextureLoader.load([
                  data.apartment_360_picture,
                  console.log(data)
                ]);
                console.log(envMap)
                scene.background = envMap

                const geometry = new THREE.SphereGeometry( 2, 32, 16 ); 
                const material = new THREE.MeshStandardMaterial({ envMap: envMap });
                const sphere = new THREE.Mesh(geometry, material);
                scene.add(sphere);

                const light = new THREE.DirectionalLight(0xffffff, 1);
                light.position.set(0, 1, 0); // Position de la lumière
                scene.add(light);

                
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
                camera.position.set(0,0,20)
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
      })
      .catch(error => {
        // Gestion des erreurs
        console.error(error);
      });
}
const apartement_id = document.querySelector('#apartment_id').value;
console.log(apartement_id);
create3dView(apartement_id);