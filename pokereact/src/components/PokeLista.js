import { useEffect,useState } from "react";
import axios from "axios";
const PokeLista = (props) => {
    const [pokemons, setPokemons] = useState([]);

    useEffect(() => {
        axios.get("https://pokeapi.co/api/v2/pokemon/").then(response =>{
            setPokemons(response.data.results);
        })
    }, [])    
    
    return <div>
        <h1>Lista</h1>
        {pokemons.map(p => <p>Bo Nadal</p>)}
    </div>
}

export default PokeLista;