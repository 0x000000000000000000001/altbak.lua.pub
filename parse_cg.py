import sys

def parse_cachegrind(filepath):
    functions = {}
    fn_map = {}
    total_cost = 0
    current_fn_id = None
    
    with open(filepath, 'r') as f:
        for line in f:
            line = line.strip()
            if line.startswith('fl='):
                continue
            elif line.startswith('fn='):
                val = line[3:]
                if val.startswith('('):
                    idx = val.find(')')
                    if idx != -1:
                        fn_id = val[:idx+1]
                        fn_name = val[idx+1:].strip()
                        if fn_name:
                            fn_map[fn_id] = fn_name
                        current_fn_id = fn_id
                    else:
                        current_fn_id = val
                else:
                    current_fn_id = val
                    
                if current_fn_id not in functions:
                    functions[current_fn_id] = 0
            elif line and line[0].isdigit():
                parts = line.split()
                if len(parts) >= 2:
                    cost = int(parts[1])
                    functions[current_fn_id] += cost
                    total_cost += cost
    
    resolved_functions = {}
    for fn_id, cost in functions.items():
        name = fn_map.get(fn_id, fn_id)
        if name not in resolved_functions:
            resolved_functions[name] = 0
        resolved_functions[name] += cost

    sorted_fns = sorted(resolved_functions.items(), key=lambda x: x[1], reverse=True)
    print(f"Total Cost: {total_cost}")
    print(f"{'Cost':>15} {'%':>6} {'Function'}")
    print("-" * 80)
    for fn, cost in sorted_fns[:30]:
        pct = (cost / total_cost) * 100 if total_cost else 0
        print(f"{cost:15d} {pct:5.1f}% {fn}")

if __name__ == "__main__":
    if len(sys.argv) > 1:
        parse_cachegrind(sys.argv[1])
    else:
        print("Usage: python parse_cg.py <cachegrind_file>")
