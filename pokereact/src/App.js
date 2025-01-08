import logo from './logo.svg';
import './App.css';
import Pokemon from './components/Pokemon';
import PokeLista from './components/PokeLista';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
function App() {
  return (
    <BrowserRouter>
    <Routes>
      <Route path="/" element={<PokeLista/>}/>
      <Route path="/pokemon/:id" element={<Pokemon />}/>
    </Routes>
    </BrowserRouter>
  );
}

export default App;
