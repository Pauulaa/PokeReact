import { useState } from "react"
const Pokemon = (props) => {
    const [nivel, setNivel] = useState(1);

    const onSubirNivel = (event) => { // on cuando suceda esto, buenas prácticas para nombres de f
        setNivel(nivel_antiguo => nivel_antiguo + 1)
    }
    const onBajarNivel = (event) => { // on cuando suceda esto, buenas prácticas para nombres de f
        setNivel(nivel_antiguo => nivel_antiguo - 1)
    }

    const calcularHP  = () => {
        //TODO: USAR LA FÓRMULA REAL
        //This one is made up
        return 65 + nivel * 3;
    }
    
    const calcularAtaque = ()  => {
        return 130 + (nivel * 2)
    }

    const calcularDefensa = ()  => {
        return 60 + (nivel * 2)
    }

    return <div>
        <h1>Leafeon </h1>
        <p> <img src = "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/470.png"></img></p>
        <p>Nivel: {nivel} </p>
        <button onClick = {onSubirNivel}>Subir nivel</button>
        <button onClick = {onBajarNivel}>Bajar nivel</button>
        <p>HP: { calcularHP() }</p>
        <p>Ataque: { calcularAtaque() } </p>
        <p>Defensa: { calcularDefensa() } </p>
    </div>
}
export default Pokemon