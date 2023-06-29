

export const Botao = ({ onClick, disabled, children, className }) => {
    return (
      <button className={className} onClick={onClick} disabled={disabled}>
        {children}
      </button>
    );
  };
